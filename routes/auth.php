<?php

use App\Http\Controllers\Auth\LoginUser;
use App\Http\Controllers\Auth\LogoutUser;
use Illuminate\Support\Facades\Route;

Route::get('/login', fn() => view('auth.login'))->name('login');
Route::post('/login', LoginUser::class)->name('login');

Route::get('/logout', LogoutUser::class)->withoutMiddleware('guest')->name('logout');