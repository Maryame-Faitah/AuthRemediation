<?php

use Illuminate\Support\Facades\Route;
use App\User;

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

Route::group(['middleware' => ['auth']], function(){

    // Recup donnée lors d'une authentification d'UN seul user sans controller
    // Route::get('/', function () {
    //     return view('welcome');
    // });
    
    Route::resource('/welcome','UserController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');