<?php

use App\Models\Business;
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
    return view('welcome');
})->name('welcome');

Route::get('/partners', function () {
    return view('partners');
})->name('partners.index');

Route::get('/about', function () {
    return view('about-us');
})->name('partners.about');

Route::get('/vendors', function () {
    $businesses = Business::approved()->inRandomOrder()->get()->take(10);
    return view('vendors', compact('businesses'));
})->name('partners.vendors');

Route::get('/contact', function () {
    return view('contact-us');
})->name('partners.contact');

Route::get('/home', function () {
    return view('home2');
});
