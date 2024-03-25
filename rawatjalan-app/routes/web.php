<?php

use Illuminate\Support\Facades\Route;

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
    return view('daftarpasien');
});

Route::get('/daftarpasien', function () {
    return view('daftarpasien');
});
Route::get('/daftarobat', function () {
    return view('daftarobat');
});
Route::post('/rawatjalan/save', function () {
    return view('rawatjalan');
});
Route::post('/rawatjalan/edit', function () {
    return view('formedit');
});
Route::get('/rawatjalan', function () {
    return view('rawatjalan');
});
Route::get('/formedit/{id}', function () {
    return view('formedit');
});
Route::get('/formtambah', function () {
    return view('formtambah');
});
