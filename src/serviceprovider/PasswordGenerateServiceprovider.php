<?php
namespace athiq\password_generator\serviceprovider;

use athiq\password_generator\PasswordGenerate;
use Illuminate\Support\ServiceProvider;

class PasswordGenerateServiceProvider extends ServiceProvider{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function register()
    {

    }


    public function boot()
    {

        // Register the service provider
        $this->app->bind('password_generator', function ($app) {
            return new PasswordGenerate();
        });
    }

}


?>
