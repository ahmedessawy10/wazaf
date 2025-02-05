<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosition;

class JobController extends Controller
{
    public function index(Request $request)
    {
        $query = JobPosition::with('employer');

        if ($request->search) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
            });
        }

        // ... rest of your existing filtering logic ...

        $jobs = $query->latest()->paginate(12);
        return view('jobs.index', compact('jobs'));
    }

    
} 