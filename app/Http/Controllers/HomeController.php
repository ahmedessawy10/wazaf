<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employer;
use App\Models\Candidate;
use App\Models\JobPosition;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke()
    {
        $categories = Category::limit(5)->get();
        $candidates = Candidate::limit(8)->get();
        $employers = Employer::limit(8)->get();
        $jobs = JobPosition::with('employer')->limit(6)->latest()->get();

        return view('home', compact('candidates', 'categories', 'employers', 'jobs'));
    }
}
