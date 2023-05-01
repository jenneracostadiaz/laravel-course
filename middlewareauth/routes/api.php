<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('example')->get('/', [ExampleController::class, 'index']);
Route::get('/no-access', [ExampleController::class, 'noAccess'])->name('no-access');