<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prob1', function () {
    return view('pages.prob1', [
        'navbar',
    ]);
});

Route::get('/prob2', function () {
    return view('pages.prob2');
});

Route::get('/prob3', function () {
    return view('pages.prob3');
});

Route::get('/prob4', function () {
    return view('pages.prob4');
});

Route::get('/prob5', function () {
    return view('pages.prob5');
});

Route::get('/prob6', function () {
    return view('pages.prob6');
});

Route::get('/prob7', function () {
    return view('pages.prob7');
});

Route::get('/prob8', function () {
    return view('pages.prob8');
});

Route::get('/prob9', function () {
    return view('pages.prob9');
});

Route::get('/prob9', function () {
    return view('pages.prob9');
});

Route::get('/prob10', function () {
    return view('pages.prob10');
});





Route::post('/saveItem', function () {
    return view('welcome');
})->name('saveItem');
