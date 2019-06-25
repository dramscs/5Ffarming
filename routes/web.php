<?php
//Route for user
Route::get('/', function () {
    return view('index');
});

Route::get('prog', 'User\ProgController@index');

Route::get('members', 'User\MemberController@index');

Route::get('sponsorship', 'User\SponsorshipController@index');

Route::get('reg', 'User\RegController@index');

Route::get('abstractsub', 'User\AbstactSubmissionController@index');

Route::get('exhibition', 'User\ExhibitionController@index');

Route::get('awards', 'User\AwardsController@index');

Route::get('speak', 'User\SpeakController@index');

Route::get('conference2019', 'User\Conference2019Controller@index');

Route::get('contact', 'User\ContactController@index');

Route::get('terms', 'User\TermController@index');






//route for admin
Auth::routes();

Route::get('/home', 'Admin\HomeController@index');

// Route::group( ['middleware' => ['auth']], function() {

Route::resource('speakers','Admin\SpeakersController');

Route::post('/store','Admin\SpeakersController@store');

Route::get('/registration', 'Admin\RegistrationController@index');

Route::resource('programs','Admin\Evn_program_detailController');

Route::post('/store','Admin\Evn_program_detailController@store');

Route::resource('event','Admin\EventController');