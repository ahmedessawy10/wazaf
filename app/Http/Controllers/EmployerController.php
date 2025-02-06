<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    /**
     * Display all employer profiles.
     */
    public function index()
    {
        $employers = Auth::user()->employers; 
        return view('employer.pro.index', compact('employers'));
    }

    /**
     * Show the form for creating a new employer profile.
     */
    public function create()
    {
        return view('employer.pro.create');
    }

    /**
     * Store a new employer profile in the database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'about_us' => 'nullable|string',
            'company_email' => 'nullable|email|unique:employers,company_email',
            'website_url' => 'nullable|url',
            'year_establish' => 'nullable|digits:4',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $employerData = $request->except(['_token', 'logo']);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/employers/logos');
            $employerData['logo'] = str_replace('public/', '', $path);
        }

        // Create new employer profile for the authenticated user
        $employer = Auth::user()->employers()->create($employerData);

        return redirect()->route('employer.pro.index')->with('success', 'Employer profile created successfully.');
    }

    /**
     * Show the form for editing the employer profile.
     */
    public function edit($id)
    {
        $employer = Employer::findOrFail($id);
        
        if ($employer->user_id != Auth::id()) {
            return redirect()->route('employer.pro.index')->with('error', 'Unauthorized access.');
        }

        return view('employer.pro.edit', compact('employer'));
    }

    /**
     * Update the employer profile in the database.
     */
    public function update(Request $request, $id)
    {
        $employer = Employer::findOrFail($id);
        
        if ($employer->user_id != Auth::id()) {
            return redirect()->route('employer.pro.index')->with('error', 'Unauthorized access.');
        }

        $request->validate([
            'company_name' => 'required|string|max:255',
            'about_us' => 'nullable|string',
            'company_email' => 'nullable|email|unique:employers,company_email,' . $employer->id,
            'website_url' => 'nullable|url',
            'year_establish' => 'nullable|digits:4',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $employerData = $request->except(['_token', 'logo']);

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/employers/logos');
            $employerData['logo'] = str_replace('public/', '', $path);
        }

        $employer->update($employerData);

        return redirect()->route('employer.pro.edit', $employer->id)->with('success', 'Employer profile updated successfully.');
    }

    /**
     * Show the employer profile.
     */
    public function show($id)
    {
        $employer = Employer::findOrFail($id);
        
        if ($employer->user_id != Auth::id()) {
            return redirect()->route('employer.pro.index')->with('error', 'Unauthorized access.');
        }

        return view('employer.pro.show', compact('employer'));
    }

    /**
     * Delete the employer profile.
     */
    public function destroy($id)
    {
        $employer = Employer::findOrFail($id);
        
        if ($employer->user_id != Auth::id()) {
            return redirect()->route('employer.pro.index')->with('error', 'Unauthorized access.');
        }

        $employer->delete();

        return redirect()->route('employer.pro.index')->with('success', 'Employer profile deleted successfully.');
    }

    public function showApplications()
    {
        $employerId = Auth::user()->employers->first()->id; 
        $pendingApplications = Application::with(['candidate', 'jobListing'])
            ->where('employer_id', $employerId)
            ->where('status', 'pending')
            ->get();

        $acceptedApplications = Application::with(['candidate', 'jobListing'])
            ->where('employer_id', $employerId)
            ->where('status', 'approved')
            ->get();

        return view('employer.applications.index', compact('pendingApplications', 'acceptedApplications'));
    }


    public function viewApplicationDetails($id)
    {
        $application = Application::with(['candidate', 'jobListing', 'candidate.user'])
            ->findOrFail($id);
        
        return view('employer.applications.show', compact('application'));
    }

    public function approveApplication($id)
    {
        $application = Application::find($id);
        
        if ($application) {
            $application->status = 'approved';
            $application->save();
        }

        return redirect()->route('employer.applications.index');
    }

    public function rejectApplication($id)
    {
        $application = Application::findOrFail($id);
        
        if ($application) {
            $application->status = 'rejected';
            $application->save();
        }

        return redirect()->route('employer.applications.index');
    }
}
