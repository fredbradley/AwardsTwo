<?php

Route::get('/', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('entrant')->user();

    //dd($users);

    return view('entrant.home');
})->name('home');


