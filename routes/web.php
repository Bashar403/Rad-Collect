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

// Display a listing of the collections
Route::get('/collections', [CollectionController::class, 'index'])->name('collections.index');
// Show the form for creating a new item in the collections
Route::get('/collections/create', [CollectionController::class, 'create'])->name('collections.create');
// Store a newly created item in the collections
Route::post('/collections', [CollectionController::class, 'store'])->name('collections.store');
// Display the specified item from the collections
Route::get('/collections/{collection}', [CollectionController::class, 'show'])->name('collections.show'); // Adjusted to singular
// Show the form for editing the specified item in the collections
Route::get('/collections/{collection}/edit', [CollectionController::class, 'edit'])->name('collections.edit'); // Adjusted to singular
// Update the specified item in the collections
Route::put('/collections/{collection}', [CollectionController::class, 'update'])->name('collections.update'); // Adjusted to singular
Route::patch('/collections/{collection}', [CollectionController::class, 'update']); // Adjusted to singular
// Remove the specified item from the collections
Route::delete('/collections/{collection}', [CollectionController::class, 'destroy'])->name('collections.destroy'); // Adjusted to singular

// communities Routes
// Display a listing of the communities posts/members
//Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
//// Show the form for creating a new communities post/member
//Route::get('/communities/create', [CommunityController::class, 'create'])->name('communities.create');
//// Store a newly created communities post/member
//Route::post('/communities', [CommunityController::class, 'store'])->name('communities.store');
//// Display the specified communities post/member
//Route::get('/communities/{community}', [CommunityController::class, 'show'])->name('communities.show');
//// Show the form for editing the specified communities post/member
//Route::get('/communities/{community}/edit', [CommunityController::class, 'edit'])->name('communities.edit');
//// Update the specified communities post/member
//Route::put('/communities/{community}', [CommunityController::class, 'update'])->name('communities.update');
//Route::patch('/communities/{community}', [CommunityController::class, 'update']);
//// Remove the specified communities post/member
//Route::delete('/communities/{community}', [CommunityController::class, 'destroy'])->name('communities.destroy');

// Contact Routes

// Show the contacts form
Route::get('/contacts', [ContactController::class, 'create'])->name('contacts.create');
// Process the contacts form submission
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');





// Static Pages Routes
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

