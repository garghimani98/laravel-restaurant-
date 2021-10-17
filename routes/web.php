<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
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


Route::get('/','RestoController@Index');
Route::get('/list','RestoController@list');
Route::view('/add','add');
Route::post('/add','RestoController@add');
Route::get('/delete/{id}','RestoController@delete');
Route::get('/edit/{id}','RestoController@edit');
