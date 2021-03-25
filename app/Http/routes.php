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

Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contact');
Route::get('criticas', 'FrontController@reviews');
Route::get('administrador', 'FrontController@admin');

Route::get('contra/correo', 'Auth\PasswordController@getEmail');
Route::post('contra/correo', 'Auth\PasswordController@postEmail');

Route::get('contra/resetear/{token}', 'Auth\PasswordController@getReset');
Route::post('contra/resetear', 'Auth\PasswordController@postReset');

Route::resource('correo', 'MailController');
Route::resource('usuario', 'UserController');
Route::resource('genero', 'GenreController');
Route::resource('pelicula', 'MovieController');
Route::resource('iniciar', 'LogController');
Route::get('cerrar', 'LogController@logout');
