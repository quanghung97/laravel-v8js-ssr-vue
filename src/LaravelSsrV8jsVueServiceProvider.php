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
        $this->loadViewsFrom(__DIR__ . '/views', 'ssr');
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
                'js/vendor/laravel-v8js-ssr-vue'
        )], 'vue-components');
    }
}
