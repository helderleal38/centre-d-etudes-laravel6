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


/* 
* FRONTEND 
*/

Route::group([], function(){
	Route::get('/', "FrontendController@index")->name('frontend_accueil');
	Route::get('/services', "FrontendController@services")->name('frontend_services');
	Route::get('/matters', "FrontendController@matters")->name('frontend_matters');
	Route::get('/about', "FrontendController@about")->name('frontend_about');
	Route::get('/contact', "FrontendController@contact")->name('frontend_contact');
	Route::post('/contact/store', "ContactController@store")->name('contact_store'); 
});

/* 
* AUTH 
*/

Auth::routes(); 

/* 
* ADMINISTRATEUR 
*/

Route::middleware('auth','administrateur')->prefix('administration/administrateur')->group(function () {
	Route::get('/admin/index', "AdministrateurController@index")->name('administrateur_index');

	/* students */
	Route::get('/students/pre_registration_list', "PreRegistrationController@PreRegistrationList")->name('pre_registration_list');
	Route::delete('/students/delete/{pre_registration}', "PreRegistrationController@destroy")->name('pre_registration_delete');

	/* teatchers */
	Route::get('/teatchers/teatchers_list', "TeatchersController@teatchersList")->name('teatchers_list');
	Route::delete('/teatchers/delete/{teatcher}', "TeatchersController@destroy")->name('teatcher_delete');

	/* comments */
	Route::get('/comments', "CommentsController@index")->name('comments_index');
	Route::delete('/comments/delete/{comment}', "CommentsController@destroy")->name('comment_delete');
	Route::delete('/comments/validation', "CommentsController@validation")->name('comments_validation');

	/* matters */
	Route::get('/matters/list', "MattersController@index")->name('matters_list');
	Route::get('/matters/create', "MattersController@create")->name('matter_create');
	Route::post('/matters/store', "MattersController@store")->name('matter_store');
	Route::get('/matters/edit/{matter}', "MattersController@edit")->name('matter_edit');
	Route::put('/matters/update/{matter}', "MattersController@update")->name('matter_update');
	Route::delete('/matters/delete/{matter}', "MattersController@destroy")->name('matter_delete');

	/* messages */
	Route::get('/contacts/list', "ContactController@index")->name('contacts_list');
	Route::delete('/contacts/delete/{contact}', "ContactController@destroy")->name('contact_delete');
});


/* 
* TEATCHERS 
*/

Route::middleware('auth','professeur')->prefix('administration/teatchers')->group(function () {
	Route::get('/teatcher', "TeatchersController@index")->name('teatchers_index');
	Route::get('/actions/create', "TeatchersController@create")->name('teatcher_create');
	Route::post('/store', "TeatchersController@store")->name('teatchers_store');

	/* comments */
	Route::get('/actions/comment/create', "CommentsController@create")->name('teatcher_comment');
	Route::post('/actions/comment/store', "CommentsController@store")->name('teatcher_comment_store');
});


/* 
* STUDENTS 
*/

Route::middleware('auth', 'eleve')->prefix('administration/students')->group(function () {
	Route::get('/student', "PreRegistrationController@index")->name('students_index');
	Route::get('/actions/create', "PreRegistrationController@create")->name('pre_registration_create');
	Route::post('/store', "PreRegistrationController@store")->name('pre_registration_store'); 
	Route::get('/actions/edit/', "PreRegistrationController@edit")->name('pre_registration_edit'); 
	Route::put('/actions/update/{pre_registration}', "PreRegistrationController@update")->name('pre_registration_update'); 
	
	/* comments */

	Route::get('/actions/comment/create', "CommentsController@create")->name('student_comment');
	Route::post('/actions/comment/store', "CommentsController@store")->name('comment_store');

});


