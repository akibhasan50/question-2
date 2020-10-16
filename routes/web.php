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

// Route::get('/', function () {
//     return view('employe.index');
// });


Route::get('/', 'App\Http\Controllers\EmployeController@index');
Route::get('/addemploye', 'App\Http\Controllers\EmployeController@create');
Route::post('/storeemploye', 'App\Http\Controllers\EmployeController@store');
Route::get('/editemploye/{id}', 'App\Http\Controllers\EmployeController@edit');
Route::get('/viewemploye/{id}', 'App\Http\Controllers\EmployeController@show');
Route::post('/updateemploye/{id}', 'App\Http\Controllers\EmployeController@update');
Route::get('/deletemploye/{id}', 'App\Http\Controllers\EmployeController@destroy');

//Route::resource('/', 'App\Http\Controllers\EmployeController');
