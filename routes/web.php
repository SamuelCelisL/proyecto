<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('plantilla.app');
});
Route::get('/app', function () {
    return view('plantilla.app');
});
Route::get('/usuario', function () {
    return view('Usuario.index');
});
Route::get('/usuario/action', function () {
    return view('Usuario.action');
});
