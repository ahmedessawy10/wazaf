<?php

namespace App\Http\Controllers;

use App\Models\JobPosition;
<<<<<<< HEAD
use App\Models\Category;
=======
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
use Illuminate\Http\Request;

class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
<<<<<<< HEAD
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
=======
    public function index()
    {
        //
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
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
<<<<<<< HEAD
    public function show($id)
    {

        $job = JobPosition::with(['employer', 'educationLevel', 'experienceLevel'])->findOrFail($id);
        if (!$job) {
            return redirect()->route('jobs.index')->with('error', 'الوظيفة غير موجودة');
        }

        return view('jobDetails', compact('job'));
=======
    public function show(JobPosition $jobPosition)
    {
        //
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
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
}
