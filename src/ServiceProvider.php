<?php

namespace Rockbuzz\LaraCustomValidation;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot()
    {
        Validator::extend(
            'cnpj', 
            '\Rockbuzz\LaraCustomValidation\Rules\CNPJ@passes', 
            trans('customValidation::messages.cnpj')
        );
        Validator::extend('cpf', '\Rockbuzz\LaraCustomValidation\Rules\CPF@passes');
        Validator::extend('full_name', '\Rockbuzz\LaraCustomValidation\Rules\FullName@passes');
        Validator::extend('have_numbers', '\Rockbuzz\LaraCustomValidation\Rules\HaveNumbers@passes');
        Validator::extend('have_letters', '\Rockbuzz\LaraCustomValidation\Rules\HaveLetters@passes');
        Validator::extend(
            'have_special_characters',
            '\Rockbuzz\LaraCustomValidation\Rules\HaveSpecialCharacters@passes'
        );
        Validator::extend('slug', '\Rockbuzz\LaraCustomValidation\Rules\Slug@passes');
        Validator::extend('match_old_password', '\Rockbuzz\LaraCustomValidation\Rules\MatchOldPassword@passes');

        $this->loadTranslationsFrom(__DIR__.'/lang', 'customValidation');

        $this->publishes([
            __DIR__.'/lang' => resource_path('lang/vendor/customValidation'),
        ], 'lang');
    }

    public function register()
    {
        //
    }
}
