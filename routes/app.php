<?php

use App\Http\Controllers\CourseResourceController;
use App\Http\Controllers\LessonResourceController;
use App\Http\Controllers\ModuleResourceController;
use App\Http\Controllers\Users\UpdateUserProfile;
use Illuminate\Support\Facades\Route;

Route::get('/profile', fn() => view('user.profile'))->name('user.profile')->middleware(['auth']);
Route::put('/profile', UpdateUserProfile::class)->name('user.profile')->middleware('auth');

Route::resource('courses', CourseResourceController::class);
Route::resource('courses.modules', ModuleResourceController::class);
Route::resource('courses.modules.lessons', LessonResourceController::class);
