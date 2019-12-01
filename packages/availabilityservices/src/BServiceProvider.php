<?php

namespace Salesdock\Availabilityservices;

use Illuminate\Support\ServiceProvider;

class BServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    protected $defer = true;
    public function register()
    {
        $this->app->bind('Salesdock\Availabilityservices\lib\BInterface','Salesdock\Availabilityservices\lib\BEloquent', function(){

            return new BEloquent();

        });
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
