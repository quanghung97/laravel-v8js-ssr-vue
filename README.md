# Server side rendering JavaScript with Vuejs in your Laravel application

## Dependency
You must install V8js extension on PHP, If you using docker you can using `php-fpm`

https://github.com/quanghung97/laradock/tree/master/php-fpm

## Installation

**1-** composer require quanghung97/laravel-v8js-ssr-vue.

**2-** php artisan vendor:publish --provider="Quanghung97\laravelV8jsSsrVue\LaravelSsrV8jsVueServiceProvider"

**3-** add config your webpack.mix.js below
```javascript
mix.js('resources/js/client.js', 'public/js')
    .js('resources/js/server.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
```
This package will create component `AppSSR.vue` `AppSSR.js` `client.js` `server.js` `ssr.blade.php`

**4-** npm install vue-server-renderer --save 

**5-** npm run dev

now you can go yourdomain/vue-ssr and view page source have `data-server-rendered="true"`
