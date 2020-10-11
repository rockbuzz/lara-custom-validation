<?php

namespace Rockbuzz\LaraCustomValidation;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider as SupportServiceProvider;

class ServiceProvider extends SupportServiceProvider
{
    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__.'/lang', 'customValidation');

        Validator::extend(
            'cnpj',
            '\Rockbuzz\LaraCustomValidation\Rules\CNPJ@passes',
            trans('customValidation::messages.cnpj')
        );
        Validator::extend(
            'cpf',
            '\Rockbuzz\LaraCustomValidation\Rules\CPF@passes',
            trans('customValidation::messages.cpf')
        );
        Validator::extend(
            'full_name',
            '\Rockbuzz\LaraCustomValidation\Rules\FullName@passes',
            trans('customValidation::messages.full_name')
        );
        Validator::extend(
            'have_numbers',
            '\Rockbuzz\LaraCustomValidation\Rules\HaveNumbers@passes',
            trans('customValidation::messages.have_numbers')
        );
        Validator::extend(
            'have_letters',
            '\Rockbuzz\LaraCustomValidation\Rules\HaveLetters@passes',
            trans('customValidation::messages.have_letters')
        );
        Validator::extend(
            'have_special_characters',
            '\Rockbuzz\LaraCustomValidation\Rules\HaveSpecialCharacters@passes',
            trans('customValidation::messages.have_special_characters')
        );
        Validator::extend(
            'match_old_password',
            '\Rockbuzz\LaraCustomValidation\Rules\MatchOldPassword@passes',
            trans('customValidation::messages.match_old_password')
        );
        Validator::extend(
            'slug',
            '\Rockbuzz\LaraCustomValidation\Rules\Slug@passes',
            trans('customValidation::messages.slug')
        );

        $this->publishes([
            __DIR__.'/lang' => resource_path('lang/vendor/customValidation'),
        ], 'lang');
    }

    public function register()
    {
        //
    }
}
