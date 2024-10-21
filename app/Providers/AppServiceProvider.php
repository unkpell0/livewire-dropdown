<?php

namespace App\Providers;

use Faker\Factory as FakerFactory;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Global locale for Faker
        $this->app->singleton(\Faker\Generator::class, function () {
            return FakerFactory::create('id_ID');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
