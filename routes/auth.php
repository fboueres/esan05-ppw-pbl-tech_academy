<?php

use App\Http\Controllers\Auth\LoginUser;
use App\Http\Controllers\Auth\LogoutUser;
use App\Http\Controllers\Auth\RegisterUser;
use Illuminate\Support\Facades\Route;

Route::get("/login", fn() => view("auth.login"))->name("login");
Route::post("/login", LoginUser::class)->name("login");

Route::get("/logout", LogoutUser::class)
    ->withoutMiddleware("guest")
    ->name("logout");
Route::get("/register", fn() => view("auth.register"))
    ->withoutMiddleware("guest")
    ->name("register");
Route::post("/register", RegisterUser::class)
    ->withoutMiddleware("guest")
    ->name("register");
