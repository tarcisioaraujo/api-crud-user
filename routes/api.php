<?php

use App\Http\Controllers\Api\RegisterUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('registerUsers', RegisterUserController::class)->except([
    'create', 'show', 'edit'
]);
