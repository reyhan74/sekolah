<?php

use Illuminate\Support\Facades\Route;

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