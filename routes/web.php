<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('{any}', 'App\HomeController@index')->where('any', '.*')->name('home.index');
