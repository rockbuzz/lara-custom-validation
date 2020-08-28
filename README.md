# Lara Custom Validation

Extra validations

[![Build Status](https://travis-ci.org/rockbuzz/lara-custom-validation.svg?branch=master)](https://travis-ci.org/rockbuzz/lara-custom-validation)

## Requirements

PHP: >=7.1

## Install

```bash
$ composer require rockbuzz/lara-custom-validation
```

## Add messages in resources/lang/pt-br/validation.php
```php

return [
    //
    'cnpj' => 'O campo :attribute não contém um CNPJ válido',
    'cpf' => 'O campo :attribute não contém um CPF válido',
    'full_name' => 'O campo :attribute não contém um nome completo',
    'have_numbers' => 'O campo :attribute não contém números',
    'have_letters' => 'O campo :attribute não contém letras',
    'have_special_characters' => 'O campo :attribute não contém caracteres especiais. ex.: @ # $ % & - ? !',
    'slug' => 'O campo :attribute não contém um formato de URI',
    'match_old_password' => 'O campo :attribute não confere'
];

```

## License

The Lara Custom Validation is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).