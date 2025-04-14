<?php

use App\Http\Controllers\CourseResourceController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ModuleResourceController;
use App\Http\Controllers\Users\UpdateUserProfile;
use Illuminate\Support\Facades\Route;

Route::get('/profile', fn() => view('user.profile'))->name('user.profile')->middleware(['auth']);
Route::put('/profile', UpdateUserProfile::class)->name('user.profile')->middleware('auth');

Route::resource('lessons', LessonController::class);

Route::resource('courses', CourseResourceController::class);
Route::resource('courses.modules', ModuleResourceController::class);
