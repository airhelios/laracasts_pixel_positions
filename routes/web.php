<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Tag;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [\App\Http\Controllers\JobController::class, 'index']);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy']);