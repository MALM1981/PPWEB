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
$*/


//Route::get('/','HomeController')->name('Inicio');
Route::view('/acercade','about')->name('About');
Route::view('/contactanos','contact')->name('Contact');
Route::view('/portafolio','portafolio')->name('Portafolio');
Route::resource('colores','HomeController')->only(['index','show']);
//Route::get('/','HomeControllers@index')->name('Inicio');




