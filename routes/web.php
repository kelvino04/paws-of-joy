<?php

use Illuminate\Support\Facades\Route;
use App\Models\Price;
use App\Models\PageContent;
use App\Models\ContactMessage;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\PageContentController;
use App\Http\Controllers\ContactMessageController;

/*
|--------------------------------------------------------------------------
| Publieke pagina's
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $contents = PageContent::where('page', 'home')
        ->get()
        ->keyBy('key');

    return view('home', compact('contents'));
});

Route::get('/about', function () {
    $contents = \App\Models\PageContent::where('page', 'about')
        ->get()
        ->keyBy('key');

    return view('about', compact('contents'));
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
    $unreadMessages = ContactMessage::whereNull('viewed_at')->count();

    return view('admin.admin', compact('unreadMessages'));
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

Route::prefix('admin/pages')
    ->middleware('admin')
    ->name('admin.pages.')
    ->group(function () {

        Route::get('/', [PageContentController::class, 'index'])
            ->name('index');

        Route::get('/home/edit', [PageContentController::class, 'editHome'])
            ->name('home.edit');

        Route::put('/home', [PageContentController::class, 'updateHome'])
            ->name('home.update');
    });

// Afbeeldingen
Route::middleware('admin')->group(function () {
    Route::get('/admin/images', [PageContentController::class, 'editImages'])
        ->name('admin.images.edit');

    Route::put('/admin/images', [PageContentController::class, 'updateImages'])
        ->name('admin.images.update');
});

Route::prefix('admin/contact-messages')
    ->middleware('admin')
    ->name('admin.contact-messages.')
    ->group(function () {

        Route::get('/', [ContactMessageController::class, 'index'])
            ->name('index');

        Route::put('/mark-all-read', [ContactMessageController::class, 'markAllRead'])
            ->name('mark-all-read');

        Route::delete('/delete-all', [ContactMessageController::class, 'destroyAll'])
            ->name('destroy-all');

        Route::get('/{contactMessage}', [ContactMessageController::class, 'show'])
            ->name('show');

        Route::delete('/{contactMessage}', [ContactMessageController::class, 'destroy'])
            ->name('destroy');
    });
