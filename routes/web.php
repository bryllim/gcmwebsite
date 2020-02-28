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

Route::get('/', ['middleware' => 'guest', function()
{
    return view("welcome");
}]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Solicitation
Route::get('/solicitation', 'HomeController@solicitation')->name('solicitation')->middleware('auth');

// Assistance Routes

// Medical
Route::get('/medical', 'HomeController@medical')->name('medical')->middleware('auth');
Route::get('/new-medical', 'HomeController@newMedical')->name('new-medical')->middleware('auth');
Route::get('/view-medical', 'HomeController@viewMedical')->name('view-medical')->middleware('auth');
// Education
Route::get('/education', 'HomeController@education')->name('education')->middleware('auth');
Route::get('/new-education', 'HomeController@newEducation')->name('new-education')->middleware('auth');
Route::get('/view-education', 'HomeController@viewEducation')->name('view-education')->middleware('auth');
// Burial
Route::get('/burial', 'HomeController@burial')->name('burial')->middleware('auth');
Route::get('/new-burial', 'HomeController@newBurial')->name('new-burial')->middleware('auth');
Route::get('/view-burial', 'HomeController@viewBurial')->name('view-burial')->middleware('auth');