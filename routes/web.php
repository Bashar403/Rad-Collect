<?php

use App\Http\Controllers\EventController;
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
// Events Routes

Route::get('/events', [EventController::class, 'index'])->name('events.index');

// Show the form for creating a new event
Route::get('/events/create', [EventController::class, 'create'])->name('events.create');

// Store a newly created event in storage
Route::post('/events', [EventController::class, 'store'])->name('events.store');

// Display the specified event
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');

// Show the form for editing the specified event
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('events.edit');

// Update the specified event in storage
Route::put('/events/{event}', [EventController::class, 'update'])->name('events.update');
Route::patch('/events/{event}', [EventController::class, 'update']);

// Remove the specified event from storage
Route::delete('/events/{event}', [EventController::class, 'destroy'])->name('events.destroy');
