<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobPositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('jobs')->name('jobs.')->group(function () {
    Route::get('/', [JobPositionController::class, 'index'])->name('index');
    Route::get('/{jobPosition}', [JobPositionController::class, 'show'])->name('show');

    Route::middleware(['auth', 'isEmployer'])->group(function () {
        Route::get('/create', [JobPositionController::class, 'create'])->name('create');
        Route::post('/', [JobPositionController::class, 'store'])->name('store');
        Route::get('/{jobPosition}/edit', [JobPositionController::class, 'edit'])->name('edit');
        Route::put('/{jobPosition}', [JobPositionController::class, 'update'])->name('update');
        Route::delete('/{jobPosition}', [JobPositionController::class, 'destroy'])->name('destroy');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'isEmployer'])->name('employer.')->group(function () {
    Route::get('/employer/dashboard', function () {
        return view('user.employer.dashboard');
    })->name('dashboard');
});

Route::middleware(['auth', 'isCandidate'])->name('candidate.')->group(function () {
    Route::get('/candidate/dashboard', function () {
        return view('user.candidate.dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
