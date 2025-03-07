<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgriFoodController;

Route::get('/', function () {
    return view('index');
})->name('landingPage');

Route::get('dashboard', function () {
    return view('hub.dashboard');
})->name('dashboard');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::get('/agrifood', [AgriFoodController::class, 'index'])->name('AgriFood');
Route::get('/agrifood/search', [AgriFoodController::class, 'search'])->name('agrifood.search');

Route::get('/agrifood/upload', [AgriFoodController::class, 'store'])->name('agrifood.upload');
Route::post('/agrifood/upload', [AgriFoodController::class, 'import']);

Route::get('register', function () {
    return view('auth.login');
})->name('register');

Route::get('able', function () {
    return view('initiatives.ABLE');
})->name('ABLE');

Route::get('greenovate', function () {
    return view('initiatives.GREENOVATE');
})->name('GREENOVATE');

Route::get('climatecare', function () {
    return view('initiatives.CLIMATECARE');
})->name('CLIMATECARE');

Route::get('digisme', function () {
    return view('initiatives.DigiSME');
})->name('DigiSME');

Route::get('dskills', function () {
    return view('initiatives.DSKILLS');
})->name('DSKILLS');
