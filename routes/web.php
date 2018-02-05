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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/afterRegistrationPage', 'Auth\RegisterController@afterRegistrationPage')->name('afterRegistrationPage');
Route::get('/confirmRegistration/{user}/{code}', 'Auth\RegisterController@confirmRegistration')->name('confirmRegistration');
