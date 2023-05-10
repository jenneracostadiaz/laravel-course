<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
Route::middleware('auth')->group(function () {
    Route::get('/example', [ExampleController::class, 'index'])->name('example');
});

require __DIR__ . '/auth.php';
>>>>>>> d3671535065dcf54c69972d7e67d39146fa4e0cb
