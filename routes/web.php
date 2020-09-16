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


/* Frontend */

Route::group([], function(){
	Route::get('/', "FrontendController@index")->name('frontend_accueil');
	Route::get('/services', "FrontendController@services")->name('frontend_services');
	Route::get('/matters', "FrontendController@matters")->name('frontend_matters');
	Route::get('/about', "FrontendController@about")->name('frontend_about');
	Route::get('/contact', "FrontendController@contact")->name('frontend_contact');

});

Auth::routes(); 

/*middleware('auth') --> seules les personnes authentifiés peuvent acceder*/

/* Administrateur */

Route::middleware('auth')->prefix('administration/administrateur')->group(function () {
	Route::get('/admin', "AdministrateurController@index")->name('administrateur_index');

	Route::get('/students/students_list', "StudentsController@studentsList")->name('students_list');
	Route::delete('/students/delete/{student}', "StudentsController@destroy")->name('student_delete');

	Route::get('/teatchers/teatchers_list', "TeatchersController@teatchersList")->name('teatchers_list');
	Route::delete('/teatchers/delete/{teatcher}', "TeatchersController@destroy")->name('teatcher_delete');
});


/* Teatchers */

Route::middleware('auth')->prefix('administration/teatchers')->group(function () {
	Route::get('/index', "TeatchersController@index")->name('teatchers_index');
	Route::post('/store', "TeatchersController@store")->name('teatchers_store');
});


/* Students */

Route::middleware('auth')->prefix('administration/students')->group(function () {
	Route::get('/index', "StudentsController@index")->name('students_index');
	Route::post('/store', "StudentsController@store")->name('students_store');  
	Route::put('/update/{studentId}', "StudentsController@update")->name('student_update');  

});

