<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobPositionController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\Candidate\SettingController;

Route::get('/', HomeController::class)->name('home');


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
