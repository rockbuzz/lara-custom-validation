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
            __DIR__.'/config/messages.php' => resource_path('views/lang/pt-br/validation.php'),
        ], 'messages');
    }

    public function register()
    {
        //
    }
}
