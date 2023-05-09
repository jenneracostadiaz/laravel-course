<?php

<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
=======
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
>>>>>>> 4ebbc0bfae1c80d170061222a221d6fc6f9cde68
