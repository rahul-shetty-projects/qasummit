<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/save-to-newsletter', [ContactController::class, 'saveToNewsletter'])->name("newsletter.store");

Route::post('/add-to-event-notify', [ContactController::class, 'saveToEventNotify'])->name("event.notify");

Route::post('/contact-mail', [ContactController::class, 'submitContactForm'])->name("contact.mail");

Route::post('/speaker-mail', [ContactController::class, 'submitSpeakerForm'])->name("speaker.mail");

Route::post('/sponsor-mail', [ContactController::class, 'submitSponsorForm'])->name("sponsor.mail");
