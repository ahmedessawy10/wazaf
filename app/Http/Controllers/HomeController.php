<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Employer;
use App\Models\Candidate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __invoke()
    {

        $categories = Category::limit(5)->get();
        $candidates = Candidate::limit(5)->get();
        $employers = Employer::limit(5)->get();


        return view('home', compact('candidates', 'categories', 'employers'));
    }
}
