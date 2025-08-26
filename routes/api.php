<?php

use App\Http\Controllers\Api\RegisterUserController;
use App\Http\Controllers\Api\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('registerUsers', RegisterUserController::class)->except([
    'create', 'show', 'edit'
]);

Route::apiResource('profiles', ProfileController::class)->except([
    'create', 'show', 'edit'
]);
