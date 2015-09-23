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

Route::get('/', function () {
    return view('home');
});

Route::get('/projects/interactive-video', function () {
    return view('projects/interactive-video');
});

Route::get('projects/interactive-video/level-lounge/proposal', function () {
    return view('projects/proposal');
});

Route::get('projects/interactive-video/level-lounge/timeline', function () {
    return view('projects/timeline');
});

Route::get('projects/interactive-video/level-lounge/storyboards', function () {
    return view('projects/storyboards');
});

Route::get('projects/interactive-video/level-lounge/references', function () {
    return view('projects/references');
});

Route::get('contact', 'PagesController@contact');

// Article routes...
Route::resource('articles', 'ArticlesController');

Route::get('admin', ['middleware' => 'manager', function(){
return 'welcome manager';
}]);
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');