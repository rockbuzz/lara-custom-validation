# Lara Custom Validation

Description

travis markdown

## Requirements

PHP: >=7.1

## Install

```bash
$ composer require rockbuzz/lara-custom-validation
```

## Rules
```php
cnpj: O campo :attribute não é um CNPJ válido;
cpf: O campo :attribute não é um CPF válido;
format_cnpj: O campo :attribute não possui o formato válido de CNPJ;
format_cpf: O campo :attribute não possui o formato válido de CPF;
phone: O campo :attribute não é um telefone válido;
phone_with_ddd: O campo :attribute não é um telefone com DDD válido;
format_cep: O campo :attribute não possui um formato válido de CEP;
full_name: O campo :attribute não contém um nome completo;
have_numbers: O campo :attribute não contém números;
have_special_characters: O campo :attribute não contém caracteres especiais. ex.: @ # $ % & - ? !;
slug: O campo :attribute não contém um formato de URI.
```

## License

The Lara Custom Validation is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).