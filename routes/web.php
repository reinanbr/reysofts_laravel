<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix('sites')->name('sites.')->group(function () {
    Route::get('index', [SiteController::class, 'index'])->name('index');
    Route::post('store', [SiteController::class, 'store'])->name('store');
    Route::post('update', [SiteController::class, 'update'])->name('update');
    Route::post('destroy', [SiteController::class, 'destroy'])->name('destroy');
});

// As rotas acima podem ser simplificadas usando a seguinte abaixo, mas para quem está começando eu recomendo fazer como as de cima:
// Route::resource('sites', SiteController::class);
