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

//testing 
Route::get('testing/yanan', 'PagesController@testing_yanan');
Route::post('testing/yanan', 'PagesController@testing')-> name('testing');

Route::get('analysis', 'AnalysisController@show')->name('analysis');

Route::match(array('patch', 'put'),'visualization', 'VisualizationNetworkController@upload')->name('upload');

Route::get('/json_storages/{json_storage}', 'JsonStoragesController@show')->name('json.show');
//homepage--tentatively defined as root -waylen
Route::get('/', 'PagesController@root')->name('root');




//for testing i will not use the Auth::router aftering developing i will change this phrase --waylen
// user authentication router 
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// usre register router
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// password reset router
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//email verify router
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

// usre personnel page show edit and update 
Route::get('/users/{user}', 'UsersController@show')->name('users.show');
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
Route::patch('/users/{user}', 'UsersController@update')->name('users.update');




