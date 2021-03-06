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
Route::get('/logout', function (){
    Auth::logout();
    return view('welcome');
});

//Route::get('s-admin', 'DefaultController@sAdmin');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/s-admin', 'DefaultController@sAdmin');

Route::get('/user', 'DefaultController@users');

Route::get('/admin', 'DefaultController@admin');

Route::get('/manager', 'DefaultController@manager');


