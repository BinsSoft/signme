<?php

namespace Devton\Signme;

use Illuminate\Support\ServiceProvider;

class SignmeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/Routes/signmeRoutes.php';
        //$this->app->make('Devton\Signme\Controllers\SignmeController');
        //$this->loadViewsFrom(__DIR__.'/views', 'signme');

        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/signme'),
            __DIR__.'/Controllers' => base_path('app/Http/Controllers'),
            __DIR__.'/Routes' => base_path('app/Http'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
