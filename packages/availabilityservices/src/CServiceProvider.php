<?php

namespace Salesdock\Availabilityservices;

use Illuminate\Support\ServiceProvider;

class CServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    protected $defer = true;
    public function register()
    {
        $this->app->bind('Salesdock\Availabilityservices\lib\CInterface','Salesdock\Availabilityservices\lib\CEloquent', function(){

            return new CEloquent();

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
