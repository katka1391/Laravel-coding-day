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
    return view('welcome');
});

Route::get('/home' , 'App\Http\Controllers\HomeController@index');

Route::get('/movies' , 'App\Http\Controllers\MovieController@index');
Route::get('/movies/top10' , 'App\Http\Controllers\MovieController@top10');
Route::get('/movies/{id}' , 'App\Http\Controllers\MovieController@show');


Route::get('/people' , 'App\Http\Controllers\PeopleController@index');
Route::get('/people/{id}' , 'App\Http\Controllers\PeopleController@show');

