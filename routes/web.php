<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\ContactController;
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

//Home Route
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

// Collection Routes

// Display a listing of the collection
Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
// Show the form for creating a new item in the collection
Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');
// Store a newly created item in the collection
Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
// Display the specified item from the collection
Route::get('/collections/{collection}', [CollectionController::class, 'show'])->name('collections.show');
// Show the form for editing the specified item in the collection
Route::get('/collections/{collection}/edit', [CollectionController::class, 'edit'])->name('collections.edit');
// Update the specified item in the collection
Route::put('/collections/{collection}', [CollectionController::class, 'update'])->name('collections.update');
Route::patch('/collections/{collection}', [CollectionController::class, 'update']);
// Remove the specified item from the collection
Route::delete('/collections/{collection}', [CollectionController::class, 'destroy'])->name('collections.destroy');

// community Routes
// Display a listing of the community posts/members
Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
// Show the form for creating a new community post/member
Route::get('/community/create', [CommunityController::class, 'create'])->name('community.create');
// Store a newly created community post/member
Route::post('/community', [CommunityController::class, 'store'])->name('community.store');
// Display the specified community post/member
Route::get('/community/{community}', [CommunityController::class, 'show'])->name('community.show');
// Show the form for editing the specified community post/member
Route::get('/community/{community}/edit', [CommunityController::class, 'edit'])->name('community.edit');
// Update the specified community post/member
Route::put('/community/{community}', [CommunityController::class, 'update'])->name('community.update');
Route::patch('/community/{community}', [CommunityController::class, 'update']);
// Remove the specified community post/member
Route::delete('/community/{community}', [CommunityController::class, 'destroy'])->name('community.destroy');

// Contact Routes

// Show the contact form
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
// Process the contact form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');





// Static Pages Routes
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

