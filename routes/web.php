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

Route::get('/previous-event', function () {
    return view(view: 'previous-event');
})->name("previous-event");

Route::get('/become-a-speaker', function () {
    return view(view: 'become-a-speaker');
})->name("become-a-speaker");

Route::get('/become-a-sponsor', function () {
    return view(view: 'become-a-sponsor');
})->name("become-a-sponsor");

Route::get('/contact-us', function () {
    return view(view: 'contact-us');
})->name("contact-us");

Route::get('/pune-event', function () {
    return view(view: 'pune-event');
})->name("pune-event");

Route::get('/bengaluru-event', function () {
    return view(view: 'bengaluru-event');
})->name("bengaluru-event");

Route::get('/london-event', function () {
    return view(view: 'london-event');
})->name("london-event");

Route::get('/delhi-event', function () {
    return view(view: 'delhi-event');
})->name("delhi-event");
