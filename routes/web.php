<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;


Route::get('/', [LoginController::class, 'showLoginForm']);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('client', 'ClientsController',
                array('names' => array('index' => 'client.list',
                                       'create'=>'addclients',
                                       'store'=>'storeclient',
                                       'show'=>'showclient'
                                    )
                ));

Route::resource('diets', 'DietsController',
                array('names' => array('index' => 'diet.list',
                                        'create'=>'createdietplan',
                                        'store'=>'stordietplan',
                                        'show'=>'viewdietplan'
                                    )
                ));


Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();
    return Redirect::to('/');
})->name('logout');


/*Route::get('/', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/clientadd', function () {
    return view('clients.addclient');
})->name('addclients');*/

//Route::get('/clientlist', [ClientsController::class, 'index'])->name('listclients');

Route::get('/listdietplans', function () {
    return view('dietplan.dietplanlist');
})->name('listdietplans');

/*Route::get('/viewdietplan', function () {
    return view('dietplan.dietplandetail');
})->name('viewdietplan');

Route::get('/createdietplan', function () {
    return view('dietplan.createdietplan');
})->name('createdietplan');

Route::get('/createdietplan', [DietplanController::class, 'create'])->name('createdietplan');*/
