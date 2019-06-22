<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// Route::group( ['middleware' => ['auth']], function() {

Route::resource('speakers','SpeakersController');

Route::post('/store','SpeakersController@store');

Route::get('/registration', 'RegistrationController@index');

Route::resource('programs','ProgramController');

Route::post('/store','ProgramController@store');