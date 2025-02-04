<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\JobPosition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // You should retrieve all employers, might be used in admin dashboard
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $request->validate([
    //         'company_name' => 'required|string',
    //         'about_us' => 'nullable|string',
    //         'website_url' => 'nullable|url',
    //         'company_vision' => 'nullable|string',
    //         'company_email' => 'nullable|email|unique:employers,company_email',
    //          'year_establish' => 'nullable|digits:4',
    //            'team_size' => 'nullable|in:only_one,10 Members,10-20 Members,20-50 Members,50-100 Members,100-200 Members',
    //            'address' => 'nullable|string',
    //          'phone' => 'nullable|string',
    //          'phone_code' => 'nullable|string',
    //          'country' => 'nullable|string',
    //         'industry_type' => 'nullable|exists:industries,id',
    //          'organization_type' => 'nullable|exists:organization_types,id',
    //            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);
    //       $employerData = $request->except(['_token','logo', 'banner_image']);
    //       if ($request->hasFile('logo')) {
    //             $path = $request->file('logo')->store('public/employers/logos');
    //             $employerData['logo'] = str_replace('public/', '', $path);
    //       }
    //       if ($request->hasFile('banner_image')) {
    //              $path = $request->file('banner_image')->store('public/employers/banners');
    //               $employerData['banner_image'] = str_replace('public/', '', $path);
    //       }
    //     $employer = Employer::create(array_merge(['user_id' => Auth::id()],$employerData));


    //        return response()->json([
    //        'message' => 'Created Employer Successfully',
    //        "data" => $employer
    //     ], 201);

    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Employer $employer)
    // {
    //    return response()->json([
    //      "data" => $employer
    //   ], 200);

    $request->validate([
              'company_name' => 'required|string',
              'about_us' => 'nullable|string',
              'website_url' => 'nullable|url',
              'company_vision' => 'nullable|string',
              'company_email' => 'nullable|email|unique:employers,company_email',
               'year_establish' => 'nullable|digits:4',
                 'team_size' => 'nullable|in:only_one,10 Members,10-20 Members,20-50 Members,50-100 Members,100-200 Members',
                 'address' => 'nullable|string',
               'phone' => 'nullable|string',
               'phone_code' => 'nullable|string',
               'country' => 'nullable|string',
              'industry_type' => 'nullable|exists:industries,id',
               'organization_type' => 'nullable|exists:organization_types,id',
                 'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                 'banner_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
          ]);

      JobPosition::create([
      'user_id' => Auth::id(),
      'title' => $request->title,
      'description' => $request->description,
      'status' => 'pending',
      'skills_required' => $request->skills_required,
      'benefits' => $request->benefits,
      'salary_min' => $request->salary_min,
      'salary_max' => $request->salary_max,
      'location' => $request->location,
      'work_type' => $request->work_type,
      'application_deadline' => $request->application_deadline,
  ]);

  return redirect()->route('employer.post-job')->with('success', 'Job created successfully and is pendingapproval.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employer $employer)
    {
           // Used when user enters his setting to edit them


    }
    public function create()
    {
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $employer)
    {
       $request->validate([
            'company_name' => 'required|string',
            'about_us' => 'nullable|string',
            'website_url' => 'nullable|url',
            'company_vision' => 'nullable|string',
            'company_email' => 'nullable|email|unique:employers,company_email,' . $employer->id,
             'year_establish' => 'nullable|digits:4',
               'team_size' => 'nullable|in:only_one,10 Members,10-20 Members,20-50 Members,50-100 Members,100-200 Members',
               'address' => 'nullable|string',
             'phone' => 'nullable|string',
             'phone_code' => 'nullable|string',
               'country' => 'nullable|string',
            'industry_type' => 'nullable|exists:industries,id',
             'organization_type' => 'nullable|exists:organization_types,id',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
               'banner_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

         $employerData = $request->except(['_token','logo', 'banner_image']);

         if ($request->hasFile('logo')) {
                $path = $request->file('logo')->store('public/employers/logos');
                $employerData['logo'] = str_replace('public/', '', $path);
          }
          if ($request->hasFile('banner_image')) {
                 $path = $request->file('banner_image')->store('public/employers/banners');
                  $employerData['banner_image'] = str_replace('public/', '', $path);
          }

        $employer->update(array_merge($employerData));
           return response()->json([
             "message" => 'Updated Employer Successfully',
           "data" => $employer
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
           // Delete employer account
    }
      public function getEmployer()
    {
        $employer = Auth::user()->employer;
         $organizationTypes = \App\Models\OrganizationType::all();
         $industries = \App\Models\Industry::all();
         return response()->json([
           "data" => $employer,
           "organizationTypes"=>$organizationTypes,
          "industries"=>$industries,
        ], 200);
    }
}
