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






// If(!Login ? Prevents  Redirection (Ask to login first) : Redirect's to desired page )
// DISCLAIMER:- The above comment is meant for explaining what is going on in a fun way. Please do not take it seriously.


Route::middleware(['auth'])->group(function(){

    Route::get('/home', 'Admin\HomeController@index');

    // Route::group( ['middleware' => ['auth']], function() {
    
    Route::resource('speakers','Admin\SpeakersController');
    
    Route::post('/store','Admin\SpeakersController@store');
    
    Route::post('/update','Admin\SpeakersController@update');
    
    Route::get('/registration', 'Admin\RegistrationController@index');
    
    Route::resource('programmasters','Admin\ProgrammasterController');
    
    Route::post('/store','Admin\ProgrammasterController@store');
    
    Route::resource('events', 'Admin\EventController');
    
    Route::post('/store','Admin\EventController@store');
    
    Route::resource('programdetails','Admin\ProgramdetailController');
    
    Route::post('/store','Admin\ProgramdetailController@store');

    // Route's For CMN_Gallery

    Route::resource('commongallery','Admin\cmn_galleryController');

    Route::post('/store','Admin\cmn_galleryController@store');


});