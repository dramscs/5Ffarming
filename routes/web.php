<?php
//Route for user
Route::get('/', function () {
    return view('welcome');
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

//route for speakers
Route::resource('speakers','Admin\SpeakersController');

Route::post('/store','Admin\SpeakersController@store');

//route for registration
Route::get('/registration', 'Admin\RegistrationController@index');

//route for events
Route::resource('events', 'Admin\EventController');

Route::post('/store','Admin\EventController@store');

//route for programmasters
Route::resource('/programmasters','Admin\ProgrammasterController');

Route::get('programmasters.create','Admin\PagesController@index');

Route::post('/store','Admin\ProgrammasterController@store');

//route for programdetails
Route::resource('programdetails','Admin\ProgramdetailController');

Route::get('programdetails.create','Admin\ProgramController@index');

Route::post('/store','Admin\ProgramdetailController@store');

//route for eventenrollments
Route::resource('/eventenrollments','Admin\EventenrollmentController');

Route::get('eventenrollments.create','Admin\EnrollmentController@index');

Route::post('/store','Admin\EventenrollmentController@store');

//route for gallary
Route::resource('/gallery','Admin\GalleryController');
// Route::get('/gallery/getEmployees/{id}', 'Admin\PagesController@getEmployees');

Route::get('gallery.create','Admin\EventFetchController@index');

Route::get('/', 'PagesController@index'); 
Route::get('/getEmployees/{id}', 'PagesController@getEmployees');

