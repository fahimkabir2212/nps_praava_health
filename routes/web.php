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
    return view('pages.LandingPage');
})->name('landing.page');

Route::get('/feedback-form-overall-review', function () {
    return view('pages.NpsFormScreen1');
})->name('main.form.slide1');

Route::get('/feedback-form', function () {
    return view('pages.NpsFormScreen2');
})->name('main.form.slide2');

Route::get('/feedback-form2', function () {
    return view('pages.NpsFormScreen3');
})->name('main.form.slide3');
Route::get('/feedback-form3', function () {
    return view('pages.NpsFormScreen4');
})->name('main.form.slide4');
Route::get('/final-page', function () {
    return view('pages.FinalScreen5a');
})->name('pages.final');
