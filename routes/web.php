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

Route::get('/', function () {
    return view('message');
});

Route::get('contact', [
    'uses'=>'CompanysController@companys'
]);

Route::post('contact', [
    'uses'=>'CompanysController@message',
    'as'=>'contact.message'
]);
