<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\UserController;
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
//    return view('welcome');
    return redirect()->route('home');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/events', EventController::class);
    Route::resource('/users', UserController::class)->middleware(['role:admin']);
    Route::resource('groups', GroupController::class)->middleware(['role:admin']);
    Route::resource('/events/{event_id}/guests', GuestController::class);
    Route::get('/events/{event_id}/guests.xlsx', [GuestController::class, 'export'])->name('guests.export');
})->middleware('auth');

Auth::routes(['register' => false]);
