<?php

namespace Punit\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       include __DIR__.'/routes.php';
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //Register Controller
        $this->app->make('Punit\Calculator\CalculatorController');
        $this->loadViewsFrom(__DIR__.'/view', 'calculator');
    }
}
