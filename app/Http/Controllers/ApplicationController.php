<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employerId = Auth::user()->employers->first()->id; 
        
        $pendingApplications = Application::with(['candidate', 'jobPosition'])
            ->where('employer_id', $employerId)
            ->where('status', 'pending')
            ->get();

        $acceptedApplications = Application::with(['candidate', 'jobPosition'])
            ->where('employer_id', $employerId)
            ->where('status', 'approved')
            ->get();

        return view('employer.applications.index', compact('pendingApplications', 'acceptedApplications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Logic for creating a new application (if needed)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Logic to store a new application
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        return view('employer.applications.show', compact('application'));
    }

    /**
     * Approve the specified application.
     */
    public function approveApplication()
    {
        $user = Auth::user();
        $applications = Application::with(['candidate', 'jobPosition', 'candidate.user'])
        ->where('status', 'pending')
            ->get();


        return view('user.employer.applications.index', compact('applications'));
                // return redirect()->route('employer.applications.redir');
    }
    
    /**
     * Redirect to the pending applications.
     */
    public function redirApplication()
    {
        $user = Auth::user();
        $applications = Application::with(['candidate', 'jobPosition', 'candidate.user'])
        ->where('status', 'pending')
            ->get();
            
        return view('user.employer.applications.index', compact('applications'));
    }

    /**
     * Accept the specified application.
     */
    public function acceptApplication($id)
    {
        $application = Application::findOrFail($id);
        
        if ($application) {
            $application->status = 'hired';
            $application->save();
        }

        // return view('user.employer.applications.index', compact('application'));
        return redirect()->route('employer.applications.redir');
    

    }
    /**
     * Reject the specified application.
     */
    public function rejectApplication($id)
    {
        $application = Application::findOrFail($id);
        
        if ($application) {
            $application->status = 'rejected';
            $application->save();
        }

        return redirect()->route('employer.applications.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        // Logic for editing an application (if needed)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        // Logic to update the application (if needed)
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        // Logic to delete an application (if needed)
    }
}
