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

Route::get('/'              , 'MyControllers@anasayfa');
Route::get('/property={id?}', 'MyControllers@property');
Route::get('/d'             , 'MyControllers@listProperty');


Route::post('search','MyControllers@denemee');
Route::post('contact','Controller@postContact');
