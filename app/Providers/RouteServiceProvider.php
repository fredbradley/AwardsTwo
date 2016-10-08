<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        $this->mapJudgeRoutes();

        $this->mapEntrantRoutes();

        //
    }

    /**
     * Define the "entrant" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapEntrantRoutes()
    {
        Route::group([
            'middleware' => ['web', 'entrant', 'auth:entrant'],
//            'prefix' => 'entrant',
            'domain' => 'enter.awardstwo.com',
            'as' => 'entrant.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/entrant.php');
        });
    }

    /**
     * Define the "judge" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapJudgeRoutes()
    {
        Route::group([
            'middleware' => ['web', 'judge', 'auth:judge'],
            'domain' => 'judge.awardstwo.com',
//            'prefix' => 'judge',
            'as' => 'judge.',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/judge.php');
        });
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::group([
            'middleware' => 'web',
            'namespace' => $this->namespace,
        ], function ($router) {
            require base_path('routes/web.php');
        });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::group([
            'middleware' => 'api',
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {
            require base_path('routes/api.php');
        });
    }
}
