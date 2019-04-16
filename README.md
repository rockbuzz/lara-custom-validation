# Lara Custom Validation

Description

travis markdown

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
    'have_special_characters' => 'O campo :attribute não contém caracteres especiais. ex.: @ # $ % & - ? !',
    'slug' => 'O campo :attribute não contém um formato de URI',
];
```

## License

The Lara Custom Validation is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).