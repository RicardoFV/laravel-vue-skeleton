<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/auth/user', 'API\UserController@authenticated');
Route::apiResource('users', 'API\UserController');
