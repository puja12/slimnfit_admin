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
    return view('dashboard.dashboard');
});

Route::get('/clientadd', function () {
    return view('clients.addclient');
});

Route::get('/clientlist', function () {
    return view('clients.list');
});

Route::get('/clientdetails', function () {
    return view('clients.clientdetails');
});
