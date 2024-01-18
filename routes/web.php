<?php

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

Route::get('/', function () {
    return view('event');
});

Route::get('/', function () {
    return view('plan');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');

Route::get('/plan', [App\Http\Controllers\PlanController::class, 'index'])->name('plan');

Route::get('/guest', [App\Http\Controllers\HomeController::class, 'index'])->name('guest');

Route::get('/wirte', [App\Http\Controllers\HomeController::class, 'index'])->name('write');

Auth::routes();
