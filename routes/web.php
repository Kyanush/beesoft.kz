<?php

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

Route::get('/internet-magazin', function () {
    return view('internet-magazin');
});

Route::get('/razrabotka-mobilnykh-prilozheniy', function () {
    return view('razrabotka-mobilnykh-prilozheniy');
});

Route::get('/avtomatizatsiya-biznesa', function () {
    return view('avtomatizatsiya-biznesa');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});


