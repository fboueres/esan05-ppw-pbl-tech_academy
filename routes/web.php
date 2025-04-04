<?php

use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("welcome");
});

Route::get('/profile', fn() => view('user.profile'))->name('user.profile')->middleware(['auth']);
