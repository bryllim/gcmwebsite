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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/members', function(){
        return view('members');
    })->name('members');

    Route::get('/newmember', function(){
        return view('newmember');
    })->name('newmember');

    Route::get('/amountdue', function(){
        return view('receiptmember');
    })->name('amountdue');

    Route::get('/viewmember', function(){
        return view('viewmember');
    })->name('viewmember');
    
});


