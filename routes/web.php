<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\EventsController;
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
return view('layouts/base');
})->name('home');

Route::get('/events',  [PagesController::class, 'events'])->name('events');

// Route::get('pages/events', [PagesController::class, 'events'])->name('events');

Route::get('/testroute', [PagesController::class, 'testroute'])->name('testroute'); 

Route::get('/testroute2', [PagesController::class, 'testroute2'])->name('testroute2'); 

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::resource('events', EventsController::class); });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
