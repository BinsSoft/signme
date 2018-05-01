# Laravel 5 Generate Sign in Process 

A simple [Laravel 5](http://www.laravel.com) service provider with some basic configuration to generate the sign in , sign up process.

## Installation
 
This package is only installed via [composer](http://getcomposer.org) by requiring the `composer require binssoft/signme` package in your project's `composer.json`. (The installation may take a while. Sadly its .git folder is very heavy)

```json
{
    "require": {
        "binssoft/signme": "<version-name>"
    }
}
```

Next, add the service provider to `config/app.php`.


```php
'providers' => [
    //..
    binssoft\signme\SignmeServiceProvider::class
]
```

That's it! You're good to go.

## Configuration

```
php artisan vendor:publish

```
After proper vendor publish few files are created

1) in `app/Http/Controllers` folder `SignmeController.php` 
2) in `resources/views/home` folder

	a) signin.balde.php

	b) signup.balde.php

	c) forget-password.balde.php

	c) change-password.balde.php

3) in `routes/web.php` few routes will be updated

## Now your all signin process is generated successfully




