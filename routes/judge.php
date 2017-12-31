<?php
Route::get('home', function() {
	return redirect()->route('judge.home');
});

Route::get('/', 'JudgingController@index')->name('home');



//Route::resource('categories', 'CategoryController');

Route::group(['prefix' => 'awards/{award}'], function () {
	Route::resource('categories', 'CategoryController');
});

Route::resource('awards', 'AwardsController');
