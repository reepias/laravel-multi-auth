<?php

Auth::routes();

Route::get('/', function () {
    return view('layouts.app');
});

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');