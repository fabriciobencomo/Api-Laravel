<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V2\PostController;


Route::apiResource('v2/posts', PostController::class)->only(['show', 'index'])->middleware('auth:sanctum');

Route::post('login', [LoginController::class, 'login']);
