<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

if ( env('IMIN')) {
    Route::get('/', 'PagesController@home');
} else {
    Route::get('/', 'PagesController@welcome');
}

Route::get('services', 'PagesController@services');
Route::get('policies', 'PagesController@policies');
Route::get('vision', 'PagesController@vision');
Route::get('about', 'PagesController@about');
Route::get('news', 'PagesController@news');
Route::get('contact', 'PagesController@contact');

Route::get('home', 'HomeController@index');


Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);