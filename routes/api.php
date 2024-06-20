<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MainController;
use App\Http\Controllers\API\UserController;

Route::get('/config/{deviceId}',[MainController::class, 'get_config']);
Route::post('/data/{deviceId}',[MainController::class, 'post_data']);
Route::get('/user', [UserController::class, 'getAllUser']);
