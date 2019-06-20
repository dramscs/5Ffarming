<?php

Route::get('/', function () {
    return view('welcome');
});


// Route for Admin

Auth::routes();

Route::get('/home', 'HomeController@index')->name('includes.home');

//-> middleware auth

// Route::middleware(['auth'])->group(function(){
// 	Route::resource('posts','PostController');
// });


Route::get('create', function () {
    return view('views.create');
});

Route::get('speakers', 'SpeakersController@index')->name('speakers');