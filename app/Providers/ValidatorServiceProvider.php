<?php

namespace App\Providers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;

class ValidatorServiceProvider   extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['validator']->extend('frontend_check_password', function ($attribute, $value, $parameters) {
            return Hash::check($value, frontendCurrentUser()->password);
        });

        $this->app['validator']->extend('backend_check_password', function ($attribute, $value, $parameters) {
            return Hash::check($value, backendCurrentUser()->password);
        });
    }
}