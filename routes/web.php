<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestRealTimeController;
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
    return view('frontend.home');
})->name('home');

Route::middleware('auth')->prefix('admin')->group(function () {
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.home');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('/events', EventController::class);
    Route::resource('/users', UserController::class)->middleware(['role:admin']);
    Route::resource('groups', GroupController::class)->middleware(['role:admin']);
    Route::resource('/events/{event_id}/guests', GuestController::class);
    Route::get('/events/{event_id}/guests.xlsx', [GuestController::class, 'export'])->name('guests.export');
    Route::get('/events/{event_id}/guests-live', [GuestController::class, 'live'])->name('guests.live');
    Route::resource('/events/{event_id}/guests-realtime', GuestRealTimeController::class);
})->middleware('auth');

Auth::routes(['register' => true]);
