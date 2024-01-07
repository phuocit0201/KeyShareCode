<?php

use App\Http\Controllers\KeyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', [KeyController::class, 'Hello'])->name('hello');
Route::get('/check-key', [KeyController::class, 'checkKey'])->name('check_key');
