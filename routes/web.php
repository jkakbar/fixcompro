<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::resource('home', \App\Http\Controllers\HomeController::class);
Route::post('/', [App\Http\Controllers\LoginController::class, 'contact'])->name("contact");

// Admin
Route::group(['prefix'=> 'admin', 'as'=> 'admin.'], function(){
    Route::get('/', [App\Http\Controllers\LoginController::class, 'index'])->name("login");
    Route::post('/', [App\Http\Controllers\LoginController::class, 'loginPost'])->name("login.post");

    Route::middleware('authredirect', 'nocache')->group(function(){
        Route::resource('dashboard', \App\Http\Controllers\DashboardController::class);
        Route::resource('user', \App\Http\Controllers\UserController::class);
        Route::resource('profile', \App\Http\Controllers\ProfileController::class);
        Route::resource('experience', \App\Http\Controllers\ExperienceController::class);
        Route::resource('education', \App\Http\Controllers\EducationController::class);
        Route::resource('setting', \App\Http\Controllers\SettingController::class);
        Route::resource('skills', \App\Http\Controllers\SkillsController::class);
        Route::resource('project', \App\Http\Controllers\ProjectController::class);

        Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name("logout");
    });
});
