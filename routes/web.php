<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php

use App\Http\Controllers\EventController;

Route::get('/event/{id}', [EventController::class, 'show'])->name('event.details');

Route::get('/events', function () {
    return view('event/events'); // Make sure this points to your events.blade.php file
})->name('events.index'); // Naming the route


// routes/web.php

use App\Http\Controllers\EducationController;

Route::get('/educations', [EducationController::class, 'index'])->name('educations.index');


// sponsorship
Route::get('/sponsorship', function () {
    return view('sponsorship.sponsorship'); // Adjusted for your folder structure
});