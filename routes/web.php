<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\Candidate\SettingController;
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

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




/*
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});
*/

Route::middleware(['auth', 'isEmployer'])->name('company.')->group(function () {
    Route::get('/comProfile', [AccountController::class, 'profile'])->name('companyProfile');
    Route::put('/update-profile', [AccountController::class, 'updateProfile'])->name('company.updateProfile');
    Route::get('/logout', [AccountController::class, 'logout'])->name('company.logout');
    Route::post('/update-profile-img', [AccountController::class, 'updateProfileImg'])->name('company.updateProfileImg');
    Route::get('/create-job', [AccountController::class, 'createJob'])->name('company.createJob');
    Route::post('/save-job', [AccountController::class, 'saveJob'])->name('company.saveJob');
    Route::get('/my-jobs', [AccountController::class, 'myJobs'])->name('company.myJobs');
    Route::get('/edit-job/edit/{jobId}', [AccountController::class, 'editJob'])->name('company.editJob');
    Route::post('/update-job/{jobId}', [AccountController::class, 'updateJob'])->name('company.updateJob');
    Route::post('/delete-job', [AccountController::class, 'deleteJob'])->name('company.deleteJob');
});

Route::middleware(['auth', 'isCandidate'])->name('candidate.')->prefix('candidate')->group(function () {
    Route::get('/dashboard', function () {
        return view('user.candidate.dashboard');
    });
});


Route::middleware(['auth', 'isEmployer'])->name('employer.')->group(function () {
    Route::get('/employer/dashboard', function () {
        return view('user.employer.dashboard');
    })->name('dashboard');
    Route::post('/employer/settings', [EmployerController::class, 'store'])->name('settings');
    Route::get('/employer/settings', [EmployerController::class, 'getEmployer'])->name('settings');



    Route::resource('employer/jobs', JobController::class)->only([
        'index',
        'create',
        'store',
        'show',
        'edit',
        'update',
        'destroy'
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

    Route::get('/settings', [SettingController::class, 'index'])->name('settings');
    Route::post('/update-profile', [SettingController::class, 'updateProfile'])->name('update.profile');
    Route::post('/add-experience', [SettingController::class, 'addExperience'])->name('add.experience');
    Route::post('/add-education', [SettingController::class, 'addEducation'])->name('add.education');
    Route::delete('/delete-experience/{experience}', [SettingController::class, 'deleteExperience'])->name('delete.experience');
    Route::delete('/delete-education/{education}', [SettingController::class, 'deleteEducation'])->name('delete.education');
});

Route::get('/candidates', [CandidateController::class, 'index'])->name('candidates.index');
Route::get('/candidates/{candidate}', [CandidateController::class, 'show'])->name('candidates.show');

Route::get('/employers', [EmployerController::class, 'index'])->name('employers.index');
Route::get('/employers/{employer}', [EmployerController::class, 'show'])->name('employers.show');

Route::middleware(['auth', 'isCandidate'])->group(function () {
    Route::get('/candidate/dashboard', [CandidateController::class, 'dashboard'])->name('candidate.dashboard');
    Route::get('/candidate/applied-jobs', [CandidateController::class, 'appliedJobs'])->name('candidate.applied-jobs');
    Route::get('/candidate/settings', [CandidateController::class, 'settings'])->name('candidate.settings');
    Route::get('/applyForJob/{id}', [JobPositionController::class, 'applyForJob'])->name('candidate.applyForJob');

    // Settings update routes
    Route::patch('/candidate/settings/basic-info', [CandidateController::class, 'updateBasicInfo'])
        ->name('candidate.settings.basic-info');
    Route::patch('/candidate/settings/profile-info', [CandidateController::class, 'updateProfileInfo'])
        ->name('candidate.settings.profile-info');
    Route::patch('/candidate/settings/account', [CandidateController::class, 'updateAccountSettings'])
        ->name('candidate.settings.account');

    // Account management routes
    Route::post('/candidate/deactivate', [CandidateController::class, 'deactivateAccount'])
        ->name('candidate.deactivate');
    Route::delete('/candidate/delete', [CandidateController::class, 'deleteAccount'])
        ->name('candidate.delete');
});
require __DIR__ . '/auth.php';
