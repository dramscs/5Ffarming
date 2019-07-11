<?php
//Route for user
Route::get('/', function () {
    return view('index');
});

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

Route::get('event', 'User\EventController@index');

Route::get('program', 'User\FetchProgramController@getPrograms');

Route::get('/getProgramDetails/{id}', 'User\FetchProgramController@getProgramDetails');

Route::get('/getProgramSpeaker/{id}', 'User\FetchProgramController@getProgramSpeaker');


//route for admin
Auth::routes();

Route::group( ['middleware' => ['auth']], function() {
    

Route::get('home', 'Admin\HomeController@index');

Route::resource('speakers','Admin\SpeakersController');

Route::get('registration', 'Admin\RegistrationController@index');

Route::resource('events', 'Admin\EventController');

Route::resource('programmasters','Admin\ProgrammasterController');

Route::resource('programdetails','Admin\ProgramdetailController');

Route::resource('programspeakers','Admin\ProgramSpeakerController');

Route::resource('enrollments','Admin\EnrollmentController');

Route::resource('gallery','Admin\GalleryController');

});