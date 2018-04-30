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
        
        //$this->mapRoute();
        $this->publishes([
            __DIR__.'/views'            => base_path('resources/views/'),
            __DIR__.'/Controllers'      => base_path('app/Http/Controllers'),
            //__DIR__.'/config'           => base_path('config'),
            __DIR__.'/Routes'           => base_path('routes'),
           
        ]);
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

    public function mapRoute(){
        $route = Config::get('signme.routes');
        Route::get($route['login'],            
                        ['as'=>'signin',
                        'uses'=>$this->getRoute("signin")
                        ]);
        Route::post($route['login'].'-action',    
                        ['as'=>'signin_post',
                         'uses'=>$this->getRoute("postSignin")
                        ]);

        Route::get($route['signup'],            
                        ['as'=>'signup',
                         'uses'=>$this->getRoute("signup")
                        ]);
        Route::post($route['signup'].'-action',    
                        ['as'=>'signup_post',
                         'uses'=>$this->getRoute("postSignup")
                        ]);

        Route::get($route['forgotpassword'],           
                        ['as'=>'forgotpassword',
                         'uses'=>$this->getRoute("forgotPassword")
                        ]);
        Route::post($route['forgotpassword'].'-action',   
                        ['as'=>'forgotpassword_post',
                         'uses'=>$this->getRoute("postforgotPassword")
                        ]);

        Route::get($route['changepassword'],           
                        ['as'=>'changepassword',
                         'uses'=>$this->getRoute("changepassword")
                        ]);
        Route::post($route['changepassword'].'-action',   
                        ['as'=>'changepassword_post',
                         'uses'=>$this->getRoute("postchangepassword")
                        ]);
    }

    
    public function getRoute($path){
        $controller = Config::get('signme.controller');
        return "App\Http\Controllers\\".$controller."@".$path;
    }

}
