Route::get('/signin', ['as'=>'login', 'uses'=>'SignmeController@signin']);
Route::post('/signin-action', ['as'=>'signin_action', 'uses'=>'SignmeController@postSignin']);

Route::get('/signup', ['as'=>'signup', 'uses'=>'SignmeController@signup']);
Route::post('/signup-action', ['as'=>'signup_action', 'uses'=>'SignmeController@postSignup']);

Route::get('/forgot-password', ['as'=>'forgotPassword', 'uses'=>'SignmeController@forgotPassword']);
Route::post('/forgot-password-action', ['as'=>'forgot_password_action', 'uses'=>'SignmeController@postforgotPassword']);

Route::get('/change-password', ['as'=>'changePassword', 'uses'=>'SignmeController@changePassword']);
Route::post('/change-password-action', ['as'=>'change_password_action', 'uses'=>'SignmeController@postChangePassword']);
