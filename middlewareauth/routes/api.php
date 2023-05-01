<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');
Route::get('/', [ExampleController::class, 'index']);