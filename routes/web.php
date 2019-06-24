<?php
//Route for user
Route::get('/', function () {
    return view('index');
});

Route::get('programs', 'User\ProgramController@index');

Route::get('members', 'User\MemberController@index');

Route::get('sponsorship', 'User\SponsorshipController@index');

Route::get('registration', 'User\TermController@index');

Route::get('abstractsub', 'User\AbstactSubmissionController@index');

Route::get('exhibition', 'User\ExhibitionController@index');

Route::get('awards', 'User\AwardsController@index');

Route::get('speakers', 'User\SpeakersController@index');

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

Route::resource('programs','Admin\ProgramController');

Route::post('/store','Admin\ProgramController@store');