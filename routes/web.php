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

Route::get('/', 'EntriesController@index')->name('home');

Route::get('/home', 'EntriesController@index');

//Admin
Route::prefix('admin')->group(function(){

	Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/','AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	//Admin Reset password

	Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
	Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
	Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
	Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

	//Admin Profile

	Route::get('/profile', 'AdminProfileController@show')->name('admin.profile');
	Route::get('/entries', 'AdminProfileController@showEntries')->name('admin.entries');


});


//Main table entries
Route::get('/entries', 'EntriesController@index')->name('entries');

Route::get('/entries/create', 'EntriesController@create');

Route::post('/entries', 'EntriesController@store');

Route::get('/entries/{id}/edit', 'EntriesController@edit');

Route::patch('/entry/{id}', 'EntriesController@update');

Route::get('/entries/{id}/delete', 'EntriesController@destroy');

Route::get('/notes/{id}/edit', 'EntriesController@notesEdit');
 
Route::patch('/notes/{id}/update', 'EntriesController@notesUpdate');

//User registration
Route::get('/register', 'RegistrationController@create');

Route::post('/register', 'RegistrationController@store');

//Password resets
Auth::routes();

//Profile
// Route::patch('/profile/{id}', 'UploadController@create')->name('upload');

Route::patch('/upload/{id}',[
    'as' => 'profilephoto.upload',
    'uses' => 'UploadController@create'
]);

Route::get('/profile', 'SessionsController@profile')->name('profile');

//Login
Route::get('/login', 'SessionsController@create')->name('login');

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');




