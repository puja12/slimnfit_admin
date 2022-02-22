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
//Route::resource('client', ClientsController::class);
/*Route::resource('client', 'ClientsController', [
    'as' => 'prefix'
]);*/

Route::resource('client', 'ClientsController',
                array('names' => array('index' => 'client.list',
                                       'create'=>'addclients')));

Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

/*Route::get('/clientadd', function () {
    return view('clients.addclient');
})->name('addclients');*/

//Route::get('/clientlist', [ClientsController::class, 'index'])->name('listclients');

Route::get('/clientdetails', function () {
    return view('clients.clientdetails');
})->name('clientdetails');
