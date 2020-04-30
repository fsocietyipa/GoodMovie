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

Route::get('/', 'MainController@index');
Route::get('/logout', 'MainController@logout');
Route::get('/page/{page}', 'MainController@indexByPage');
//Route::get('/', 'MainController@loggedOrNot');

Route::get('/details/{id}', 'DetailController@indexById');


Route::get('/register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/userpage', 'UserController@index');
Route::post('/changePassword','UserController@changePassword')->name('changePassword');

Route::get('/detailsLike/{movieID}', 'DetailController@favAction');

Route::get('/favouriteList', 'FavouriteListController@index');
