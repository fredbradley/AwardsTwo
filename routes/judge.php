<?php
Route::get('home', function() {
	return redirect('/');
});

Route::get('/', 'JudgingController@index')->name('home');


Route::resource('awards', 'AwardsController');

