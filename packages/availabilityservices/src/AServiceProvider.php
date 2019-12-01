<?php

namespace Salesdock\Availabilityservices;

use Illuminate\Support\ServiceProvider;
// use Salesdock\Availabilityservices\lib\AEloquent;

class AServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    protected $defer = true;
    public function register()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->app->bind('Salesdock\Availabilityservices\lib\AInterface','Salesdock\Availabilityservices\lib\AEloquent', function(){

            return new AEloquent();

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
