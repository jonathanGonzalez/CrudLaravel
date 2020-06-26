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



Route::resource('tickets', 'TicketsController');
Route::get('borrartickets/{id}', 'TicketsController@destroy');
Route::get('actualizartickets/{id}', 'TicketsController@edit');
Route::post('actualizarticketsbd', 'TicketsController@update');




