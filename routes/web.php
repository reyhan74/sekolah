<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/extra', function () {
    return view('extra');
});
Route::get('/campus', function () {
    return view('campus');
});
Route::get('/index2', function () {
    return view('index2');
});
Route::get('/destination', function () {
    return view('destination');
});
Route::get('/tour', function () {
    return view('tour');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/guides', function () {
    return view('guides');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', [ContactController::class, 'send'])->name('contact.send');
Route::get('/guides', [AdminProfileController::class, 'index']);
