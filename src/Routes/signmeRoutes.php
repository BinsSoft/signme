<?php

Route::get('signin',  			['as'=>'sign_in','uses'=>'SignmeController@signin']);
Route::post('signin-action',  	['as'=>'sign_in_post','uses'=>'SignmeController@postSignin']);
Route::get('signup',  			['as'=>'sign_in','uses'=>'SignmeController@signup']);
Route::post('signup-action',  	['as'=>'sign_up_post','uses'=>'SignmeController@postSignup']);

Route::get('forgot-password',  			['as'=>'forgot_password','uses'=>'SignmeController@forgotPassword']);
Route::post('forgot-password-action',  	['as'=>'forgot_password_post','uses'=>'SignmeController@postforgotPassword']);