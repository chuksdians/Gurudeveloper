<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/services', 'HomeController@service');
Route::get('/gallery', 'HomeController@gallery');
Route::get('/contact', 'HomeController@contact');

Route::post('/contact','HomeController@postContact');
Route::get('/admin', 'HomeController@admin');