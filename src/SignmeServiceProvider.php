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
        
        $this->mapRoute();
        $this->publishes([
            __DIR__.'/views'            => base_path('resources/views/signme'),
            __DIR__.'/Controllers'      => base_path('app/Http/Controllers'),
            __DIR__.'/config'           => base_path('config'),
           
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
        
        Route::get('signin',            
                        ['as'=>'signin',
                        'uses'=>$this->getRoute("signin")
                        ]);
        Route::post('signin-action',    
                        ['as'=>'signin_post',
                         'uses'=>$this->getRoute("postSignin")
                        ]);

        Route::get('signup',            
                        ['as'=>'signup',
                         'uses'=>$this->getRoute("signup")
                        ]);
        Route::post('signup-action',    
                        ['as'=>'signup_post',
                         'uses'=>$this->getRoute("postSignup")
                        ]);

        Route::get('forgot-password',           
                        ['as'=>'forgotpassword',
                         'uses'=>$this->getRoute("forgotPassword")
                        ]);
        Route::post('forgot-password-action',   
                        ['as'=>'forgotpassword_post',
                         'uses'=>$this->getRoute("postforgotPassword")
                        ]);
    }

    
    public function getRoute($path){
        $controller = Config::get('signme.controller');
        return "App\Http\Controllers\\".$controller."@".$path;
    }

}
