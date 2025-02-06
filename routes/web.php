<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\EmployerController;

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
// Route::middleware(['auth', 'isEmployer'])->name('employer.')->group(function () {
//     Route::get('/employer/dashboard', function () {
//        return view('user.employer.dashboard');
//     })->name('employer.dashboard');
   
Route::resource('employer', JobController::class)->only([
    'index', 'create', 'store','show','edit','update','destroy'
]);
// Route::get('employer', [JobController::class, 'create'])->name('employer.jobs.create');
// Route::get('employer/jobs', [JobController::class, 'store'])->name('employer.jobs.store');

// Route::get('pro', [EmployerController::class, 'index'])->name('employer.pro.index');
// Route::get('pro/create', [EmployerController::class, 'create'])->name('employer.pro.create');
// Route::post('pro', [EmployerController::class, 'store'])->name('employer.pro.store');
// Route::get('pro/{employer}/edit', [EmployerController::class, 'edit'])->name('employer.pro.edit');
// Route::put('pro/{employer}', [EmployerController::class, 'update'])->name('employer.pro.update');
// Route::get('pro/{employer}', [EmployerController::class, 'show'])->name('employer.pro.show');
// Route::delete('pro/{employer}', [EmployerController::class, 'destroy'])->name('employer.pro.destroy');


// Route::get('/company/applications/{id}', [EmployerController::class, 'viewApplicationDetails'])->name('employer.applications.show');
// Route::post('/company/applications/{id}/approve', [EmployerController::class, 'approveApplication'])->name('employer.applications.approve');
// Route::post('/company/applications/{id}/reject', [EmployerController::class, 'rejectApplication'])->name('employer.applications.reject');
// Route::get('/company/applications', [EmployerController::class, 'showApplications'])->name('applications.index');

// });
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'is_employer'])->name('company.')->group(function () {
    
});

Route::middleware(['auth', 'isCandidate'])->name('candidate.')->group(function () {
    Route::get('/candidate/dashboard', function () {
        return view('user.candidate.dashboard');
    })->name('dashboard');
});

require __DIR__ . '/auth.php';
