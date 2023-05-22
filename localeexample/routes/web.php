<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\WelcomController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/example', [WelcomController::class, 'index'])->name('example');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang');