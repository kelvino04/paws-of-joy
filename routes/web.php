<?php

use Illuminate\Support\Facades\Route;
use App\Models\Price;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tarifs', function () {
    $prices = Price::where('active', true)
        ->orderBy('sort_order')
        ->get();

    return view('tarifs', compact('prices'));
});

Route::get('/trackingLessons', function () {
    return view('trackingLessons');
});

Route::get('/tracking', function () {
    return view('tracking');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/termsAndConditions', function () {
    return view('termsAndConditions');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'getData'])->name('contact.getData');
