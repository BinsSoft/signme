<?php

namespace Tonmoynandy\Signme;

use Illuminate\Support\ServiceProvider;
use Config,Route;

class SignmeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->publishes([
            __DIR__.'/views'            => base_path('resources/views/'),
            __DIR__.'/Controllers'      => base_path('app/Http/Controllers')
           
        ]);
        if (file_exists(__DIR__.'/Route/web.php')){
             file_put_contents( base_path('routes/web.php'), file_get_contents(__DIR__.'/Route/web.php'), FILE_APPEND );
             @unlink(__DIR__.'/Route/web.php');
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $configPath = dirname(__FILE__) . '/config/signme.php';
        $this->mergeConfigFrom($configPath, 'signme');
    }

    

}
