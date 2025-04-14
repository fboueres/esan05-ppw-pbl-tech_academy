<?php

use App\Http\Controllers\Auth\LoginUser;
use App\Http\Controllers\Auth\LogoutUser;
use App\Http\Controllers\Auth\RegisterUser;
use Illuminate\Support\Facades\Route;

Route::name('login')->group(function () {
    Route::get("/login", fn() => view("auth.login"));
    Route::post("/login", LoginUser::class);
});

Route::get("/logout", LogoutUser::class)
    ->withoutMiddleware("guest")
    ->name("logout");

Route::name('register')->group(function () {
    Route::get('/register', fn() => view('auth.register'));
    Route::post('/register', RegisterUser::class);
});
