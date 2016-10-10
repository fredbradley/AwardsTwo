<?php

Route::get('/', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('judge')->user();

    //dd($users);

    return view('judge.home');
})->name('home');

Route::resource('awards', 'AwardsController');

