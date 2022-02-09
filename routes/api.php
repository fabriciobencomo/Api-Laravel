<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V2\PostController;


Route::apiResource('v2/posts', PostController::class);
