<?php
Route::get('home', function() {
	return redirect()->route('judge.home');
});

Route::get('/', 'JudgingController@index')->name('home');


Route::resource('awards', 'AwardsController');

