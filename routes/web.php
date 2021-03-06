<?php

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

Route::redirect('/', 'inicio');

Route::get('/inicio', 'ProductController@index')->name('inicio');

Route::view('/comandos', 'command')->name('comandos');

Route::post('/importcsv', 'ProductController@handleCommands')->name('handlecsv');