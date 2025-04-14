<?php

use App\Http\Controllers\CourseResourceController;
use App\Http\Controllers\LessonResourceController;
use App\Http\Controllers\ModuleResourceController;
use App\Http\Controllers\Users\UpdateUserProfile;
use Illuminate\Support\Facades\Route;

Route::name('user.')->group(function () {
    Route::name('profile')->group(function () {
        Route::get('/profile', fn () => view('user.profile'));
        Route::put('/profile', UpdateUserProfile::class);
    });
});

Route::resource('courses', CourseResourceController::class);
Route::resource('courses.modules', ModuleResourceController::class);
Route::resource('courses.modules.lessons', LessonResourceController::class);
