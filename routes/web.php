<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tarifs', function () {
    return view('tarifs');
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
