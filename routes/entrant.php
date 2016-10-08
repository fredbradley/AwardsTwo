<?php

/*Route::get('/', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('entrant')->user();

    //dd($users);

    return view('entrant.dashboard');
})->name('dashboard');


*/
Route::get('/choose', 'EntryController@chooseAward')->name('home');
Route::get('/', 'EntryController@dashboard')->name('dashboard');