<?php

use Illuminate\Support\Facades\Route;
use App\Models\Price;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Publieke pagina's
|--------------------------------------------------------------------------
*/

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

Route::get('/termsAndConditions', function () {
    return view('termsAndConditions');
});

Route::get('/privacy', function () {
    return view('privacy');
});


/*
|--------------------------------------------------------------------------
| Contactformulier
|--------------------------------------------------------------------------
*/

Route::post('/contact', [ContactController::class, 'getData'])
    ->name('contact.getData');


/*
|--------------------------------------------------------------------------
| Authenticatie
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.post');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {
    return view('admin');
})->middleware('admin');

Route::get('/admin/status', function () {
    return response()->json([
        'authenticated' => auth()->check() && auth()->user()->is_admin,
    ]);
});
