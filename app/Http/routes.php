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

Route::get('/', ['as' => 'home', function () {
    return Redirect::route('all_adverts');
}]);

Route::get('login', function () {
    return Redirect::route('home');
});

// auth
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// adverts
Route::get('/adverts/list/{my?}', ['as' => 'all_adverts', 'uses' => 'AdvertController@index']);
Route::group(['middleware' => ['auth']], function() {
    Route::post('/advert/new', 'AdvertController@create');
    Route::post('/advert/{id}/offer', 'AdvertController@offer');
    Route::get('/advert/{id}/accept', 'AdvertController@accept');
});
