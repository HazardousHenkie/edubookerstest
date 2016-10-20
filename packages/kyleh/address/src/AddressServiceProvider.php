<?php

namespace Kyleh\Address;

use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /* merge config file instead of overwriting it */
        $this->mergeConfigFrom(
            __DIR__.'/../config/address.php', 'address'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /* views */
        $this->loadViewsFrom(__DIR__.'/resources/views', 'kyleh/address');

        /* publish views */
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/kyleh/address'),
        ], 'views');

        /* publish config */
        $this->publishes([
            __DIR__.'/../config/address.php' => config_path('address.php'),
        ], 'config');

        /* publish public */
        $this->publishes([
            __DIR__.'../public' => public_path('kyleh/address'),
        ], 'public');

        /* routes */
        include __DIR__.'/routes.php';

    }
}
