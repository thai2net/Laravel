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

Route::get('hellolaravel', function () {
    return 'hello laravel';
});

Route::get('hello','helloController@helloWorld');
Route::get('hello/{name}','helloController@helloName');

Route::get('helloworld', function () {
    return view('helloworld');
});

Route::get('hellomember/{member}','helloController@helloMember');

Route::get('usetemplate', function () {
    return view('usetemplate');
});

Route::get('usetemplate2/{member}','helloController@hello');