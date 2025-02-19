<?php

namespace App\Http\Controllers\Home;

use App\Models\Employer;
use App\Models\Industry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class EmployerController extends Controller
{
    public function index(Request $request)
    {
        $query = Employer::with(['user', 'industry']);

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('company_name', 'like', '%' . $request->search . '%')
                    ->orWhere('about_us', 'like', '%' . $request->search . '%');
            });
        }

        if ($request->location) {
            $query->where(function ($q) use ($request) {
                $q->where('city', 'like', '%' . $request->location . '%')
                    ->orWhere('address', 'like', '%' . $request->location . '%');
            });
        }

        $employers = $query->latest()->paginate(12);
        $industries = Industry::withCount('employers')->get();

        return view('employers.index', compact('employers', 'industries'));
    }

    public function show(Employer $employer)
    {
        $employer->load(['user', 'industry', 'organizationType', 'jobs' => function ($query) {
            $query->latest()->take(5);
        }]);

        return view('employers.show', compact('employer'));
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
