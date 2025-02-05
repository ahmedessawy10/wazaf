<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobPositionController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'is_employer'])->name('company.')->group(function () {
    Route::get('/comProfile',[AccountController::class,'profile'])->name('company.companyProfile');
    Route::put('/update-profile',[AccountController::class,'updateProfile'])->name('company.updateProfile');
    Route::get('/logout',[AccountController::class,'logout'])->name('company.logout');
    Route::post('/update-profile-img',[AccountController::class,'updateProfileImg'])->name('company.updateProfileImg');
    Route::get('/create-job',[AccountController::class,'createJob'])->name('company.createJob');
    Route::post('/save-job',[AccountController::class,'saveJob'])->name('company.saveJob');
    Route::get('/my-jobs',[AccountController::class,'myJobs'])->name('company.myJobs');
    Route::get('/edit-job/edit/{jobId}',[AccountController::class,'editJob'])->name('company.editJob');
    Route::post('/update-job/{jobId}',[AccountController::class,'updateJob'])->name('company.updateJob');
    Route::post('/delete-job',[AccountController::class,'deleteJob'])->name('company.deleteJob');
});

Route::middleware(['auth', 'isCandidate'])->name('candidate.')->group(function () {
    Route::get('/candidate/dashboard', function () {
        return view('user.candidate.dashboard');
    })->name('dashboard');
});


require __DIR__ . '/auth.php';
