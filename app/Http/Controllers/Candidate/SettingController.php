<?php

namespace App\Http\Controllers\Candidate;

use App\Models\Candidate;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $candidate = Auth::user()->candidate;
        return view('user.candidate.setting', compact('candidate'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:4'],
            'email' => ['email', 'required'],
            'phone' => ['required'],
            'job_title' => ['required'],
            'summary' => ['nullable'],
            'personal_website' => ['nullable', 'url'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required'],
            'availability' => ['required'],
            'profile_photo' => ['nullable', 'image', 'max:2048'],
            'resume' => ['nullable', 'mimes:pdf,doc,docx', 'max:2048'],
        ]);

        // Update user basic info
        Auth::user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Handle profile photo upload
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile-photos', 'public');
            Auth::user()->update(['profile_photo' => $path]);
        }

        // Handle resume upload
        if ($request->hasFile('resume')) {
            $path = $request->file('resume')->store('resumes', 'public');
            $resumePath = $path;
        }

        // Update or create candidate profile
        $candidate = Candidate::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'job_title' => $request->job_title,
                'summary' => $request->summary,
                'personal_website' => $request->personal_website,
                'gender' => $request->gender,
                'date_of_birth' => $request->date_of_birth,
                'availability' => $request->availability,
                'phone' => $request->phone,
                'resume' => $resumePath ?? null,
            ]
        );

        return back()->with('success', 'Profile updated successfully');
    }

    public function addExperience(Request $request)
    {
        $request->validate([
            'company_name' => 'required',
            'position' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'is_current' => 'boolean',
            'description' => 'nullable',
        ]);

        Experience::create([
            'candidate_id' => Auth::user()->candidate->id,
            'company_name' => $request->company_name,
            'position' => $request->position,
            'start_date' => $request->start_date,
            'end_date' => $request->is_current ? null : $request->end_date,
            'is_current' => $request->is_current,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Experience added successfully');
    }

    public function addEducation(Request $request)
    {
        $request->validate([
            'institution' => 'required',
            'degree' => 'required',
            'field_of_study' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after:start_date',
            'is_current' => 'boolean',
            'description' => 'nullable',
        ]);

        Education::create([
            'candidate_id' => Auth::user()->candidate->id,
            'institution' => $request->institution,
            'degree' => $request->degree,
            'field_of_study' => $request->field_of_study,
            'start_date' => $request->start_date,
            'end_date' => $request->is_current ? null : $request->end_date,
            'is_current' => $request->is_current,
            'description' => $request->description,
        ]);

        return back()->with('success', 'Education added successfully');
    }

    public function deleteExperience(Experience $experience)
    {
        if ($experience->candidate_id === Auth::user()->candidate->id) {
            $experience->delete();
            return back()->with('success', 'Experience deleted successfully');
        }
        return back()->with('error', 'Unauthorized action');
    }

    public function deleteEducation(Education $education)
    {
        if ($education->candidate_id === Auth::user()->candidate->id) {
            $education->delete();
            return back()->with('success', 'Education deleted successfully');
        }
        return back()->with('error', 'Unauthorized action');
    }
}
