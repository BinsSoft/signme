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

Route::get('/signin', ['as'=>'login', 'uses'=>'SignmeController@signin']);
Route::post('/signin-action', ['as'=>'signinAction', 'uses'=>'SignmeController@postSignin']);

Route::get('/signup', ['as'=>'signup', 'uses'=>'SignmeController@signup']);
Route::post('/signup-action', ['as'=>'signupAction', 'uses'=>'SignmeController@postSignup']);

Route::get('/forgot-password', ['as'=>'forgotPassword', 'uses'=>'SignmeController@forgotPassword']);
Route::post('/forgot-password-action', ['as'=>'forgotPasswordAction', 'uses'=>'SignmeController@postforgotPassword']);

Route::get('/change-password', ['as'=>'changePassword', 'uses'=>'SignmeController@changePassword']);
Route::post('/change-password-action', ['as'=>'changePasswordAction', 'uses'=>'SignmeController@postChangePassword']);
