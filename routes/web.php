<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => App\Http\Middleware\LocaleMiddleware::getLocale()], function() {
    Route::get('/', [PagesController::class, 'index']);
    Route::get('policy', [PagesController::class, 'policy']);
});

Route::get('locale/{lang}', [LocaleController::class, 'setLocale'])->name('set-locale');
