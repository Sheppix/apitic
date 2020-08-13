<?php

use App\Http\Controllers\PersonnageController;
use App\Personnage;
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


//Route::get('/home', 'PersonnageController@list');

//Route::get('/create', 'PersonnageController@index');

//route pour accéder à la fonction ajouter un personnage
//Route::get('/create', 'PersonnageController@create')->name('home');
//Route::post('/create', 'PersonnageController@store');

Route::resource('/home','PersonnageController');

//Route::get('/delete/{id}', 'PersonnageController@delete')->name('delete');