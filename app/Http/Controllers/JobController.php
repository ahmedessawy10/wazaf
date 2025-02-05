<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\JobPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
          $jobs = JobPosition::where('employer_id', Auth::id())->get();
          return view('user.employer.my-jobs', compact('jobs'));

            // return response()->json([
            //     "data" => $jobs
            // ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.employer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'job_title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'experience_id' => 'required|exists:experience_levels,id',
            'education_id' => 'required|exists:education_levels,id',
            'deadline' => 'required|date',
            'total_positions' => 'required|integer|min:1',
            'job_type' => 'required|in:full_time,part_time,freelance,internship',
            'job_location' => 'nullable|string|max:255',
            'salary_type' => 'required|in:hourly,monthly,yearly,project',
            'min_salary' => 'nullable|numeric',
            'max_salary' => 'nullable|numeric',
            'benefits' => 'nullable|string',
            'keywords' => 'nullable|string',
        ]);

        // Create the job
        $job = JobPosition::create([
            'job_title' => $request->job_title,
            'description' => $request->description,
            'employer_id' => Auth::id(), // Assuming the employer is logged in
            'category_id' => $request->category_id,
            'experience_id' => $request->experience_id,
            'education_id' => $request->education_id,
            'deadline' => $request->deadline,
            'total_positions' => $request->total_positions,
            'job_type' => $request->job_type,
            'job_location' => $request->job_location,
            'salary_type' => $request->salary_type,
            'min_salary' => $request->min_salary,
            'max_salary' => $request->max_salary,
            'benefits' => $request->benefits,
            'keywords' => $request->keywords,
        ]);

        // Redirect or return a response
        return redirect()->route('employer.jobs.index')->with('success', 'Job posted successfully!');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job = JobPosition::findOrFail($id);  // Fetch the job details
        return view('user.employer.show', compact('job'));  // Pass the job to the view
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    // Retrieve the job position by ID, or fail if not found
    $jobPosition = JobPosition::find($id); // Make sure to handle a case where $jobPosition might be null.

    if (!$jobPosition) {
        return redirect()->route('employer.jobs.index')->with('error', 'Job position not found');
    }

    // Return the edit view with the job position data
    return view('user.employer.edit', compact('jobPosition'));
}

    
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobPosition $jobPosition)
    {
          $request->validate([
           'job_title' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'experience_id' => 'required|exists:experience_levels,id',
            'education_id' => 'required|exists:education_levels,id',
             'deadline' => 'required|date',
            'total_positions' => 'required|integer|min:1',
               'job_type' => 'required|in:full_time,part_time,freelance,internship',
            'job_location' => 'nullable|string',
              'salary_type' => 'required|in:hourly,monthly,yearly,project',
             'min_salary' => 'nullable|numeric',
             'max_salary' => 'nullable|numeric',
             'is_remote' => 'nullable|boolean',
             'custom_salary' => 'nullable|string',

        ]);
       $jobPosition->update([
          'job_title' => $request->job_title,
        'description' => $request->description,
            'category_id' => $request->category_id,
            'experience_id' => $request->experience_id,
             'education_id' => $request->education_id,
            'deadline' => $request->deadline,
              'total_positions' => $request->total_positions,
             'job_type' => $request->job_type,
            'job_location' => $request->job_location,
              'salary_type' => $request->salary_type,
             'min_salary' => $request->min_salary,
             'max_salary' => $request->max_salary,
            'is_remote' => $request->is_remote,
            'custom_salary' => $request->custom_salary,
        ]);

            if($request->filled('tags')) {
                 $jobPosition->tags()->sync($request->tags);
            }

           return response()->json([
           'message' => 'Updated Job Successfully',
             "data" => $jobPosition
          ], 200);
    }
    public function destroy($id)
{
    $job = JobPosition::findOrFail($id);

    // Ensure the job belongs to the current employer
    if ($job->employer_id !== Auth::id()) {
        return redirect()->route('employer.jobs.index')->with('error', 'You cannot delete this job.');
    }

    // Delete the job
    $job->delete();

    // Redirect with a success message
    return redirect()->route('employer.jobs.index')->with('success', 'Job deleted successfully!');
}


    
    // public function destroy(JobPosition $jobPosition)
    // {
       
        
    // }
    //  public function getRecentJobs(){
    //      $jobs=  JobPosition::where('employer_id', Auth::id()) ->latest()
    //             ->take(5)->get();
    //          return response()->json([
    //             "data" => $jobs
    //         ], 200);
    //     }
}
