<?php

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [
        'localeSessionRedirect',
        'localizationRedirect',
        'localeViewPath'
    ]
], function() {
    Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });

    Route::get('/', IndexController::class);
});
