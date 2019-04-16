<?php

namespace Rockbuzz\LaraCustomValidation;

use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot()
    {
        \Validator::extend('cnpj', '\Rockbuzz\LaraCustomValidation\Rules\CNPJ@passes');
        \Validator::extend('cpf', '\Rockbuzz\LaraCustomValidation\Rules\CPF@passes');
        \Validator::extend('full_name', '\Rockbuzz\LaraCustomValidation\Rules\FullName@passes');
        \Validator::extend('have_numbers', '\Rockbuzz\LaraCustomValidation\Rules\HaveNumbers@passes');
        \Validator::extend('have_special_characters', '\Rockbuzz\LaraCustomValidation\Rules\HaveSpecialCharacters@passes');
        \Validator::extend('slug', '\Rockbuzz\LaraCustomValidation\Rules\Slug@passes');

        $this->publishes([
            __DIR__ . '/config/custom-validation.php' => config_path('custom-validation.php')
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/custom-validation.php', 'custom-validation');
    }
}
