<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'is_employer'])->name('employer.')->group(function () {
    Route::get('/employer/dashboard', function () {
        return view('employer.dashboard');
    })->name('dashboard');
});
// Route::middleware(['auth', 'is_candidate'])->name('candidate.')->group(function () {
//     Route::get('/candidate/dashboard', function () {
//         return view('candidate.dashboard');
//     })->name('dashboard');
// });
Route::get('/candidate/dashboard', function () {
    return view('user.candidate.dashboard');
})->name('candidate.dashboard');
require __DIR__ . '/auth.php';
