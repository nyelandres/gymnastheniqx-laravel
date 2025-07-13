<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::get('/usermanagement', function () {
    return view('settings.usermanagement.usermanagement');
})->name('usermanagement');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');
