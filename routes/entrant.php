<?php

Route::get('/', 'EntryController@dashboard')->name('dashboard');
Route::resource('entries', 'EntriesController');
