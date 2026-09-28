<?php

use Illuminate\Support\Facades\Route;
use App\Models\Price;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PriceController;


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
    return view('admin.admin');
})->middleware('admin');

Route::get('/admin/status', function () {
    return response()->json([
        'authenticated' => auth()->check() && auth()->user()->is_admin,
    ]);
});

Route::prefix('admin/tarifs')
    ->middleware('admin')
    ->name('admin.tarifs.')
    ->group(function () {

        Route::get('/', [PriceController::class, 'index'])
            ->name('index');

        Route::get('/create', [PriceController::class, 'create'])
            ->name('create');

        Route::post('/', [PriceController::class, 'store'])
            ->name('store');

        Route::get('/{price}/edit', [PriceController::class, 'edit'])
            ->name('edit');

        Route::put('/{price}', [PriceController::class, 'update'])
            ->name('update');

        Route::delete('/{price}', [PriceController::class, 'destroy'])
            ->name('destroy');
    });
