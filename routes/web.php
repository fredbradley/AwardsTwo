<?php
Session::set('lang', 'en');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['domain'=>'enter.awardstwo.com'], function() {

	Route::get('/', function() {
		    return view('entrant.welcome');
	});
	
	//Entrant Login
	Route::get('login', 'EntrantAuth\LoginController@showLoginForm');
	Route::post('login', 'EntrantAuth\LoginController@login');
	Route::post('logout', 'EntrantAuth\LoginController@logout');
	
	//Entrant Register
	Route::get('register', 'EntrantAuth\RegisterController@showRegistrationForm');
	Route::post('register', 'EntrantAuth\RegisterController@register');
	
	//Entrant Passwords
	Route::post('password/email', 'EntrantAuth\ForgotPasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'EntrantAuth\ResetPasswordController@reset');
	Route::get('password/reset', 'EntrantAuth\ForgotPasswordController@showLinkRequestForm');
	Route::get('password/reset/{token}', 'EntrantAuth\ResetPasswordController@showResetForm');
});

Route::group(['domain'=>'judge.awardstwo.com'], function() {
	
	Route::get('/', function() {
		    return view('judge.welcome');
	});
	
	//Judge Login
	Route::get('login', 'JudgeAuth\LoginController@showLoginForm');
	Route::post('login', 'JudgeAuth\LoginController@login');
	Route::post('logout', 'JudgeAuth\LoginController@logout');
	
	//Judge Register
	Route::get('register', 'JudgeAuth\RegisterController@showRegistrationForm');
	Route::post('register', 'JudgeAuth\RegisterController@register');
	
	//Judge Passwords
	Route::post('password/email', 'JudgeAuth\ForgotPasswordController@sendResetLinkEmail');
	Route::post('password/reset', 'JudgeAuth\ResetPasswordController@reset');
	Route::get('password/reset', 'JudgeAuth\ForgotPasswordController@showLinkRequestForm');
	Route::get('password/reset/{token}', 'JudgeAuth\ResetPasswordController@showResetForm');

});


