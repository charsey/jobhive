<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Socialite\Googleauth;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Applicants\ApplicantsInfoController;
use App\Http\Controllers\Applicants\ApplicantsEducationController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\LogoutController;

Route::get('/',[IndexController::class,'index']);

Route::get('profile-settings',[ProfileController::class,'profile']);

Route::post('step2',[ApplicantsEducationController::class,'applicants_edu']);

Route::get('upload-resume', [IndexController::class,'applicants_info']);
Route::get('upload-education', [IndexController::class,'applicants_edu']);
Route::get('upload-skills', [IndexController::class,'applicants_skills']);
Route::get('profile', [IndexController::class, 'profile_settings'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('step1', [ApplicantsInfoController::class, 'saveone']);

// logout
Route::post('logout', [LogoutController::class, 'logout'])->name('logout');
// endlogout
// profile edit
Route::post('save-changes',[ProfileController::class, 'save_changes']);
// end profile edit
 
Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();



});


Route::get('/auth/google/callback', function () {
    dd(Socialite::driver('google')->user());
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


