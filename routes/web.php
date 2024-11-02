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
    return view(view: 'home');
})->name("home");

Route::get('/upcoming-event', function () {
    return view(view: 'upcoming-event');
})->name("upcoming-event");

Route::get('/previous-events', function () {
    return view(view: 'previous-events');
})->name("previous-events");

Route::get('/upcoming-events', function () {
    return view(view: 'upcoming-events');
})->name("upcoming-events");
