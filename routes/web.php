<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', HomeController::class)->name('home');

// Route::post('auth/register', [AuthController::class, 'register'])->name('auth.register');
// Route::post('auth/login', [AuthController::class, 'login'])->name('auth.login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'isEmployer'])->name('employer.')->group(function () {
    Route::get('/employer/dashboard', function () {
       return view('user.employer.dashboard');
    })->name('dashboard');
    Route::post('/employer/settings', [EmployerController::class, 'store'])->name('settings');
    Route::get('/employer/settings', [EmployerController::class, 'getEmployer'])->name('settings');



    Route::resource('employer/jobs', JobController::class)->only([
        'index', 'create', 'store','show','edit','update','destroy'
    ]);
   


    


    //  rout for jobcontroller index



    // Route::get('/employer/jobs', [JobController::class, 'index'])->name('job.index');
    // Route::post('/employer/jobs', [JobController::class, 'store'])->name('job.store');
    // Route::get('/employer/', [EmployerController::class, 'create'])->name('job.create');




    // Route::get('/employer/overview' , [JobController::class , 'getRecentJobs'])->name('employer.overview');
    // Route::resource('employer/jobs', JobController::class)->names([
    //     'store' => 'jobs.store',
    //     'index' => 'employer.jobs.index',
    //     'create' => 'employer.jobs.create',
    //     'show' => 'employer.jobs.show',
    //     'edit' => 'employer.jobs.edit',
    //     'update' => 'employer.jobs.update',
    //     'destroy' => 'employer.jobs.destroy',
    // ]);






    Route::get('/employer/my-profile', function () {
        return view('employer.my-profile');
    })->name('profile');
    Route::get('/employer/saved-candidates', function () {
        return view('employer.saved-candidates');
    })->name('saved-candidates');
    Route::get('/employer/custom-questions', function () {
        return view('employer.custom-questions');
    })->name('custom-questions');

});
Route::middleware(['auth', 'isCandidate'])->name('candidate.')->group(function () {
    Route::get('/candidate/dashboard', function () {
        return view('candidate.dashboard');
    })->name('dashboard');
});
require __DIR__ . '/auth.php';
