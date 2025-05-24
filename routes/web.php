<?php

use \App\Http\Controllers\CourtTypeController;
use \App\Http\Controllers\CourtController;
use \Illuminate\Support\Facades\Route;




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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admins', function () {
    return view('admins');
});

Route::get('/home', function () {
    return view('home');
})->name('home.index');

route::get('/court-type', [CourtTypeController::class, 'index']);
route::get('/court-type', [CourtTypeController::class, 'store']);

Route::resource('court-type', CourtTypeController::class);
route::resource('court', CourtController::class);

Route::get('/master', function () {
    return view('master');
})->name('master.index');

Route::get('/service', function () {
    return view('service');
})->name('service.index');
