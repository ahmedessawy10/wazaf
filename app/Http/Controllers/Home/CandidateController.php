<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidateController extends Controller
{
    public function index(Request $request)
    {
        $query = Candidate::with(['user', 'skills']);

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('job_title', 'like', '%' . $request->search . '%')
                    ->orWhere('summary', 'like', '%' . $request->search . '%');
            });
        }

        // Search by job title
        if ($request->job_title) {
            $query->where('job_title', 'like', '%' . $request->job_title . '%');
        }

        // Filter by location
        if ($request->location) {
            $query->where(function ($q) use ($request) {
                $q->where('country', 'like', '%' . $request->location . '%')
                    ->orWhere('city', 'like', '%' . $request->location . '%');
            });
        }

        $candidates = $query->latest()->paginate(12);
        return view('candidates.index', compact('candidates'));
    }

    public function show(Candidate $candidate)
    {
        $candidate->load(['user', 'skills']);
        return view('candidates.show', compact('candidate'));
    }

    public function dashboard()
    {
        $candidate = Auth::user()->candidate;

        $stats = [
            'applied_jobs' => $candidate->appliedJobs()->count(),
            'favorite_jobs' => 0, // TODO: Implement favorites functionality
            'job_alerts' => 0, // TODO: Implement job alerts functionality
            'messages' => 0, // TODO: Implement messages functionality
        ];

        return view('user.candidate.dashboard', compact('stats'));
    }

    public function appliedJobs()
    {
        $appliedJobs = Auth::user()->candidate->appliedJobs()
            ->with('company')
            ->orderBy('job_applications.created_at', 'desc')
            ->get();

        return view('user.candidate.applyedJob', compact('appliedJobs'));
    }

    public function settings()
    {
        $candidate = Auth::user()->candidate;
        return view('user.candidate.setting', compact('candidate'));
    }

    public function updateBasicInfo(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'job_title' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'personal_website' => 'nullable|url',
            'profile_picture' => 'nullable|image|max:2048',
        ]);

        $candidate = Auth::user()->candidate;

        // Handle profile picture upload if provided
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile-pictures', 'public');
            $validated['profile_picture'] = $path;
        }

        $candidate->update($validated);

        return back()->with('success', 'Basic information updated successfully');
    }

    public function updateProfileInfo(Request $request)
    {
        $validated = $request->validate([
            'marital_status' => 'required|string',
            'gender' => 'required|string',
            'job_specialization' => 'required|string',
            'skills' => 'required|string',
            'languages' => 'required|string',
            'availability' => 'required|boolean',
        ]);

        $candidate = Auth::user()->candidate;
        $candidate->update($validated);

        return back()->with('success', 'Profile information updated successfully');
    }

    public function updateAccountSettings(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|string',
            'email' => 'required|email|unique:users,email,' . Auth::id(),
            'whatsapp' => 'nullable|string',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $candidate = $user->candidate;

        // Update user email if changed
        if ($validated['email'] !== $user->email) {
            $user->email = $validated['email'];
            $user->save();
        }

        // Update password if provided
        if (isset($validated['password'])) {
            $user->password = bcrypt($validated['password']);
            $user->save();
        }

        // Update candidate contact info
        $candidate->update([
            'phone' => $validated['phone'],
            'whatsapp' => $validated['whatsapp'] ?? null,
        ]);

        return back()->with('success', 'Account settings updated successfully');
    }

    public function deactivateAccount()
    {
        $user = Auth::user();
        $user->is_active = false;
        $user->save();

        Auth::logout();
        return redirect()->route('login')->with('message', 'Your account has been deactivated');
    }

    public function deleteAccount()
    {
        $user = Auth::user();
        Auth::logout();
        $user->delete();

        return redirect()->route('login')->with('message', 'Your account has been deleted');
    }
}
