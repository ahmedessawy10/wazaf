<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'is_candidate'])->name('candidate.')->group(function () {
    Route::get('/candidate/dashboard', [CandidateController::class, 'dashboard'])->name('dashboard');
});

require __DIR__ . '/auth.php';
