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

//Main table entries
Route::get('/entries', 'EntriesController@index')->name('entries');

Route::get('/entries/create', 'EntriesController@create')->name('entries.create');

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

//company
Route::get('/company', 'CompanyController@company')->name('company');

Route::patch('/company/{id}',[
  'as' => 'logo.upload',
  'uses' => 'CompanyController@logoCreate'
]);

Route::get('/company/entries', 'CompanyController@company_entries')->name('company_entries');

Route::get('/company/archived', 'CompanyController@company_archive')->name('company_archive');

Route::get('/company/register', 'CompanyController@company_register')->name('company_register');

Route::post('/company/register', 'CompanyController@company_create')->name('company_register');
