<?php

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');

    Route::get('/showBooking', function(){
        return view ('showBooking');
    })->name('showBooking');

    Route::get('/showAudi', function(){
        return view ('showAudi');
    })->name('showAudi');

    Route::get('/viewAudi', function(){
        return view ('viewAudi');
    })->name('viewAudi');

    Route::get('/editAudi', function(){
        return view ('editAudi');
    })->name('editAudi');

    Route::get('/addAudi', function(){
        return view ('addAudi');
    })->name('addAudi');
});
