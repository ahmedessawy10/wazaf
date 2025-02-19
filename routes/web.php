<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Candidate\SettingController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
//use  add apllication controller
use App\Http\Controllers\ApplicationController;


// Home route
Route::get('/', App\Http\Controllers\Home\HomeController::class)->name('home');

// Auth routes (commented out for now)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Candidate and Employer routes
Route::get('/candidates', [App\Http\Controllers\Home\CandidateController::class, 'index'])->name('candidates.index');
Route::get('/candidates/{candidate}', [App\Http\Controllers\Home\CandidateController::class, 'show'])->name('candidates.show');
Route::get('/employers', [App\Http\Controllers\Home\EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/{employer}', [App\Http\Controllers\Home\EmployerController::class, 'show'])->name('employers.show');

Route::resource('jobs', App\Http\Controllers\Home\JobPositionController::class);

// Authenticated routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Employer-specific routes
Route::middleware(['auth', 'isEmployer'])->name('company.')->group(function () {
    Route::get('/comProfile', [AccountController::class, 'comprofile'])->name('companyProfile');
    Route::put('/update-profile', [AccountController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/logout', [AccountController::class, 'logout'])->name('logout');
    Route::post('/update-profile-img', [AccountController::class, 'updateProfileImg'])->name('updateProfileImg');
    Route::get('/create-job', [AccountController::class, 'createJob'])->name('createJob');
    Route::post('/save-job', [AccountController::class, 'saveJob'])->name('saveJob');
    Route::get('/my-jobs', [AccountController::class, 'myJobs'])->name('myJobs');
    Route::get('/edit-job/edit/{jobId}', [AccountController::class, 'editJob'])->name('editJob');
    Route::post('/update-job/{jobId}', [AccountController::class, 'updateJob'])->name('updateJob');
    Route::post('/delete-job', [AccountController::class, 'deleteJob'])->name('deleteJob');
});

// Candidate-specific routes
Route::middleware(['auth', 'isCandidate'])->name('candidate.')->prefix('candidate')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Candidate\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/applyedJob', [App\Http\Controllers\Candidate\DashboardController::class, 'applyedJob'])->name('applyedJob');
    Route::get('/setting', [App\Http\Controllers\Candidate\SettingController::class, 'index'])->name('setting');
    Route::get('/applyedJob/cancel/{id}', [App\Http\Controllers\Candidate\DashboardController::class, 'cancelApply'])->name('applyedJob.cancel');
    Route::patch('/candidate/settings/update-profile', [App\Http\Controllers\Candidate\SettingController::class, 'updateProfile'])->name('settings.update-profile');
    Route::post('/candidate/experience/add', [App\Http\Controllers\Candidate\SettingController::class, 'addExperience'])->name('experience.add');
    Route::post('/candidate/education/add', [App\Http\Controllers\Candidate\SettingController::class, 'addEducation'])->name('education.add');
    Route::patch('/candidate/settings/update-account', [App\Http\Controllers\Candidate\SettingController::class, 'updateAccount'])->name('settings.update-account');
    Route::delete('/candidate/experience/{experience}', [App\Http\Controllers\Candidate\SettingController::class, 'deleteExperience'])->name('experience.delete');
    Route::delete('/candidate/education/{education}', [App\Http\Controllers\Candidate\SettingController::class, 'deleteEducation'])->name('education.delete');
});

// Employer-specific routes
Route::middleware(['auth', 'isEmployer'])->name('employer.')->prefix('employer')->group(function () {
    Route::get('/employer/dashboard', function () {
        return view('user.employer.dashboard');
    })->name('dashboard');

    Route::resource('jobs', JobController::class)->only([
        'index',
        'create',
        'store',
        'show',
        'edit',
        'update',
        'destroy'
    ]);
    Route::get('applications/approved/show', [ApplicationController::class, 'redirApplication'])->name('applications.redir');

    Route::get('applications/approved', [ApplicationController::class, 'approveApplication'])->name('applications.approve');
    Route::post('applications/{id}/reject', [ApplicationController::class, 'rejectApplication'])->name('applications.reject');

    Route::post('applications/{id}/approve', [ApplicationController::class, 'acceptApplication'])->name('applications.approve');

    // Route::prefix('employer')->name('employer.')->middleware('auth')->group(function () {
    //     // Route::resource('applications', ApplicationController::class);

    // });
});

// Candidate applying for jobs
Route::middleware(['auth', 'isCandidate'])->group(function () {
    Route::get('/applyForJob/{id}', [App\Http\Controllers\Home\JobPositionController::class, 'applyForJob'])->name('candidate.applyForJob');
});

require __DIR__ . '/auth.php';
