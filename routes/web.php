<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('user', 'UserController@index')->name('user');
Route::get('add-user', 'UserController@create')->name('add-user');
Route::post('save-user', 'UserController@save')->name('save-user');
