<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Session::set('lang', 'en');

Route::group(['middleware' => 'entrant', 'domain'=>'enter.awardstwo.com'], function () {
    //Login Routes...
    Route::get('/login', 'EntrantAuth\AuthController@showLoginForm');
    Route::post('/login', 'EntrantAuth\AuthController@login');
    Route::get('/logout', 'EntrantAuth\AuthController@logout');
    
    //Registration Routes
    Route::get('/register', 'EntrantAuth\AuthController@showRegistrationForm');
    Route::post('/register', 'EntrantAuth\AuthController@register');
    
    Route::get('/', 'EntryController@index');
});

Route::group(['middleware' => 'judge', 'domain'=>'judge.awardstwo.com'], function () {
    //Login Routes...
    Route::get('/login', 'JudgeAuth\AuthController@showLoginForm');
    Route::post('/login', 'JudgeAuth\AuthController@login');
    Route::get('/logout', 'JudgeAuth\AuthController@logout');
    
    //Registration Routes
    Route::get('/register', 'JudgeAuth\AuthController@showRegistrationForm');
    Route::post('/register', 'JudgeAuth\AuthController@register');
    
    Route::get('/', 'JudgingController@index');
    

    Route::get('/404-page', function () {
        return view('judge/404-page');
    });

    Route::get('/profile', function () {
        return view('judge/pages/profile');
    });
    Route::get('/typography', function () {
        $users = App\User::find(7);
        echo $users->attributes;
        var_dump($users);
        return view('judge/pages/typography');
    });
    Route::get('/grid', function () {
        return view('judge/pages/grid');
    });
    Route::get('/table', function () {
        return view('judge/pages/table');
    });
    Route::get('/form-elements', function () {
        return view('judge/pages/forms/form-elements');
    });
    Route::get('/form-components', function () {
        return view('judge/pages/forms/form-components');
    });

    Route::get('/button', function () {
        return view('judge/pages/ui-element/button');
    });
    Route::get('/dropdown', function () {
        return view('judge/pages/ui-element/dropdown');
    });
    Route::get('/icons', function () {
        return view('judge/pages/ui-element/icon');
    });
    Route::get('/panels', function () {
        return view('judge/pages/ui-element/panel');
    });
    Route::get('/alerts', function () {
        return view('judge/pages/ui-element/alert');
    });
    Route::get('/progressbars', function () {
        return view('judge/pages/ui-element/progressbar');
    });
    Route::get('/pagination', function () {
        return view('judge/pages/ui-element/pagination');
    });
    Route::get('/other-elements', function () {
        return view('judge/pages/ui-element/other');
    });
    Route::get('/chartjs', function () {
        return view('judge/pages/charts/chartjs');
    });
    Route::get('/c3chart', function () {
        return view('judge/pages/charts/c3chart');
    });
    Route::get('/calendar', function () {
        return view('judge/pages/calendar');
    });
    Route::get('/inbox', function () {
        return view('judge/pages/mail/inbox');
    });
    Route::get('/compose', function () {
        return view('judge/pages/mail/compose');
    });
    Route::get('/invoice', function () {
        return view('judge/pages/invoice');
    });
    Route::get('/docs', function () {
        return view('judge/pages/docs');
    });
    Route::get('/blank', function () {
        return view('judge/pages/blank');
    });
});
Route::get('/', function () {
    abort(404);
});
Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/test', function () {
    
    echo "<pre>";
    var_dump(App\Awards::all());
    echo "</pre>";
    $award = App\Awards::find(1);
    $award->delete();
    echo "<pre>";
    var_dump(App\Awards::all());
    echo "</pre>";

    return view('welcome');
});
Route::resource('award', 'AwardsController');
