<?php

namespace Rockbuzz\LaraCustomValidation;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot()
    {
        $me = $this;
        $this->app['validator']->resolver(
            function ($translator, $data, $rules, $messages, $customAttributes) use($me) {

            $messages += config('custom-validation.messages');

            return new \Validator($translator, $data, $rules, $messages, $customAttributes);
        });

        $this->publishes([
            __DIR__ . '/config/custom-validation.php' => config_path('custom-validation.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/custom-validation.php', 'custom-validation');
    }
}
