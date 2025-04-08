<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\Users\UpdateUserProfile;
use Illuminate\Support\Facades\Route;

Route::get('/profile', fn() => view('user.profile'))->name('user.profile')->middleware(['auth']);
Route::put('/profile', UpdateUserProfile::class)->name('user.profile')->middleware('auth');

Route::resource('lessons', LessonController::class);
