<?php

namespace App\Http\Controllers\Candidate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{


    function  updateProfile(Request $request)
    {


        $request->validate([
            'name' => ["required", 'min:4'],
            'email' => ['email', "required"],
            'password' => ["nullable"],
        ]);



        Auth::user()->update($request->all());
    }
}
