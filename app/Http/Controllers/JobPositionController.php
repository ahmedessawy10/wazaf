<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\JobPosition;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        $query = JobPosition::with('employer');

        // Search functionality
        if ($request->has('search')) {
            $query->where('job_title', 'like', '%' . $request->search . '%');
        }

        // Location filter
        if ($request->has('location')) {
            $query->where('job_location', 'like', '%' . $request->location . '%');
        }

        // Category filter
        if ($request->has('category')) {
            $query->where('category_id', $request->category);
        }

        // Type filter (full-time, part-time, etc)
        if ($request->has('type')) {
            $query->where('job_type', $request->type);
        }

        $jobs = $query->paginate(10);
        $categories = Category::all();

        // dd($jobs);


        return view('findJob', compact('jobs', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

    public function show($id)
    {

        $job = JobPosition::with(['employer', 'educationLevel', 'experienceLevel'])->findOrFail($id);
        if (!$job) {
            return redirect()->route('jobs.index')->with('error', 'الوظيفة غير موجودة');
        }

        return view('jobDetails', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPosition $jobPosition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobPosition $jobPosition)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobPosition $jobPosition)
    {
        //
    }

    public function applyForJob($id)
    {

        $job =  JobPosition::findorfail($id);

        JobApplication::create([
            "job_position_id" => $job->id,
            'candidate_id' => Auth::user()->candidate->id

        ]);

        return redirect()->back()->with('succeess', 'job apply successfully');
    }
}
