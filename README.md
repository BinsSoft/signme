# Laravel 5 Generate Sign in Process 

A simple [Laravel 5](http://www.laravel.com) service provider with some basic configuration to generate the sign in , sign up process.

## Installation
 
This package is only installed via [composer](http://getcomposer.org) by requiring the `composer require tonmoynandy/signme` package in your project's `composer.json`. (The installation may take a while, because the package requires TCPDF. Sadly its .git folder is very heavy)

```json
{
    "require": {
        "tonmoynandy/signme": "dev-master"
    }
}
```

Next, add the service provider to `config/app.php`.

```php
'providers' => [
    //..
    'Tonmoynandy\Signme\SignmeServiceProvider',
]
```

That's it! You're good to go.

## Configuration

```
php artisan vendor:publish

```
After proper vendor publish few files are created

1) SignmeController.php in app/Http/Controllers folder
2) signme view folder with 3 blade file in resources/views folder
	a) signin.balde.php
	b) signup.balde.php
	c) forget-password.balde.php
3) signme.php in config folder


## Now your all signin process is generated successfully

from config/signme.php file , 

1) you can change the controller name by change the `controller` index
2) you can change the url by change the `route` index 


