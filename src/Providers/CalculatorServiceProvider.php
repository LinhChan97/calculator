<?php

namespace Linhchan\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Linhchan\Calculator\CalculatorController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include dirname(__DIR__, 1).'/Routes/web.php';
    }
}
