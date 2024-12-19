<?php

use App\Http\Controllers\AuditoriumController;
use App\Models\Auditorium;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/auditorium', function () {
    return view('auditorium');
})->name('auditorium');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/bookAudi', function () {
    return view('bookAudi');
})->name('bookAudi');

Route::get('/bookingForm', function () {
    return view('bookingForm');
})->name('bookingForm');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::prefix("auditorium")->group(function () {
        Route::get('/showAudi', [AuditoriumController::class, 'index'])->name('auditorium.index');
        Route::get("/editAudi/{id}", [AuditoriumController::class, "edit"])->name("auditorium.edit");
        Route::put("/editAudi/{id}", [AuditoriumController::class, "update"])->name("auditorium.update");
        Route::get("/showAudi/{id}", [AuditoriumController::class, "show"])->name("auditorium.view");
        Route::delete("/showAudi/{id}", [AuditoriumController::class, 'destroy'])->name("auditorium.delete");
        Route::get(
            '/create',
            [AuditoriumController::class, "create"]
        )->name('auditorium.create');
        Route::post(
            '/create',
            [AuditoriumController::class, "store"]
        )->name('auditorium.store');
    });

    Route::get('/showBooking', function () {
        return view('showBooking');
    })->name('showBooking');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');
