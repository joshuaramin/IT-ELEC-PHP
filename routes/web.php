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

Route::get('/faq', function () {
    return view('faq');
})->name('faq');



Route::get("/", [AuditoriumController::class, "welcome"])->name("auditorium.welcome");
Route::get("/bookAudi/{id}", [AuditoriumController::class, "auditoriumshow"])->name("auditorium.show");
Route::get("/bookingForm", function () {
    return view("bookingForm");
})->name("bookingForm");

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
    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::get('/showBooking', function () {
        return view('showBooking');
    })->name('showBooking');
});



Route::middleware(['roleAuth:user'])->group(function () {
    Route::get('/bookingForm', function () {
        return view('bookingForm');
    })->name('bookingForm');
});
