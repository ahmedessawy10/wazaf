<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employer;
use App\Models\Candidate;
<<<<<<< HEAD
use App\Models\JobPosition;
=======
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke()
    {
<<<<<<< HEAD
        $categories = Category::limit(5)->get();
        $candidates = Candidate::limit(8)->get();
        $employers = Employer::limit(8)->get();
        $jobs = JobPosition::with('employer')->limit(6)->latest()->get();

        return view('home', compact('candidates', 'categories', 'employers', 'jobs'));
=======

        $categories = Category::limit(5)->get();
        $candidates = Candidate::limit(5)->get();
        $employers = Employer::limit(5)->get();


        return view('home', compact('candidates', 'categories', 'employers'));
>>>>>>> 4c1c557 (Add initial project structure with configuration, models, controllers, and views)
    }
}
