# Lara Custom Validation

Laravel custom validations

<p><img src="https://github.com/rockbuzz/lara-custom-validation/workflows/Main/badge.svg"/></p>


## Requirements

- PHP >= 7.2.5
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
        'new_password' => 'match_old_password',
    ];
}
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