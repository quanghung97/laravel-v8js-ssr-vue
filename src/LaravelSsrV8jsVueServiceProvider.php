<?php

namespace Quanghung97\laravelV8jsSsrVue;

use Illuminate\Support\ServiceProvider;

class LaravelSsrV8jsVueServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Quanghung97\LaravelV8jsSsrVue\V8JsVueController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/routes.php';

        $this->publishes([
            __DIR__ . '/../resources/js' => resource_path(
                'js'
        )], 'vue-components');

        $this->publishes([
            __DIR__ . '/views' => base_path('resources/views'),
        ]);
    }
}
