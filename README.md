# Lara Custom Validation

Laravel custom validations

[![Build Status](https://travis-ci.org/rockbuzz/lara-custom-validation.svg?branch=master)](https://travis-ci.org/rockbuzz/lara-custom-validation)

## Requirements

- PHP ^7.2
- Laravel 6+

## Install

```bash
$ composer require rockbuzz/lara-custom-validation
```

## Available rules

- [`CNPJ`](#CNPJ)
- [`CPF`](#CPF)
- [`FullName`](#FullName)
- [`HaveLetters`](#HaveLetters)
- [`HaveNumbers`](#HaveNumbers)
- [`HaveSpecialCharacters`](#HaveSpecialCharacters)
- [`MatchOldPassword`](#MatchOldPassword)
- [`Slug`](#Slug)

### `CNPJ`

```php
use Rockbuzz\LaraCustomValidation\Rules\CNPJ;

public function rules()
{
    return [
        'field' => [new CNPJ],
    ];
}
```

### `CPF`

```php
use Rockbuzz\LaraCustomValidation\Rules\CPF;

public function rules()
{
    return [
        'field' => [new CPF],
    ];
}
```

### `FullName`

```php
use Rockbuzz\LaraCustomValidation\Rules\FullName;

public function rules()
{
    return [
        'field' => [new FullName],
    ];
}
```

### `HaveLetters`

```php
use Rockbuzz\LaraCustomValidation\Rules\HaveLetters;

public function rules()
{
    return [
        'field' => [new HaveLetters],
    ];
}
```

### `HaveNumbers`

```php
use Rockbuzz\LaraCustomValidation\Rules\HaveNumbers;

public function rules()
{
    return [
        'field' => [new HaveNumbers],
    ];
}
```

### `HaveSpecialCharacters`

```php
use Rockbuzz\LaraCustomValidation\Rules\HaveSpecialCharacters;

public function rules()
{
    return [
        'field' => [new HaveSpecialCharacters],
    ];
}
```

### `MatchOldPassword`

```php
use Rockbuzz\LaraCustomValidation\Rules\MatchOldPassword;

public function rules()
{
    return [
        'field' => [new MatchOldPassword],
    ];
}
```

### `Slug`

```php
use Rockbuzz\LaraCustomValidation\Rules\Slug;

public function rules()
{
    return [
        'field' => [new Slug],
    ];
}
```

### You can use the extension mode

```php

public function rules()
{
    return [
        'field' => 'string_rule',
    ];
}
```

### In extension mode it is necessary to add messages to the validation file for the language
```php
//resources/lang/pt-br/validation.php
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

### Style Code

``` bash
composer cs
```

### Testing

``` bash
composer test
```

## License

The Lara Custom Validation is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).