<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $type = $request->type ?? 'jobs';
        $search = $request->search;

        switch ($type) {
            case 'jobs':
                return redirect()->route('jobs.index', ['search' => $search]);
            case 'companies':
                return redirect()->route('employers.index', ['search' => $search]);
            case 'candidates':
                return redirect()->route('candidates.index', ['search' => $search]);
            default:
                return redirect()->route('jobs.index', ['search' => $search]);
        }
    }
} 