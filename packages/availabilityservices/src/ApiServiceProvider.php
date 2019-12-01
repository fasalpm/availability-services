<?php

namespace Salesdock\Availabilityservices;

use Illuminate\Support\ServiceProvider;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    protected $defer = true;
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');       
    }
   

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
