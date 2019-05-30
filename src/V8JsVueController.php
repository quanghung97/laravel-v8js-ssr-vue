<?php

namespace App\Http\Controllers;

class V8JsVueController extends Controller
{
    public function render()
    {
        // Get the vue server renderer script
        $renderer_source = \File::get(base_path('node_modules/vue-server-renderer/basic.js'));

        // Get the server entry point
        $app_source = \File::get(public_path('js/server.js'));

        // define some local variable to our environment
        $js = '
            var process = { env: { VUE_ENV: "server", NODE_ENV: "production" } };
            this.global = { process: process };
        ';

        $v8 = new \V8js();

        ob_start();

        $v8->executeString($js);
        $v8->executeString($renderer_source);
        $v8->executeString($app_source);

        return ob_get_clean();
    }
}
