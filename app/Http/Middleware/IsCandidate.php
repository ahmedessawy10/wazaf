<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsCandidate
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'candidate') {
            return $next($request);
        }
        return redirect('/')->with('error', 'Access Denied');
    }
}
