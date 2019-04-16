<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class HaveSpecialCharacters implements Rule
{

    public function passes($attribute, $value): bool
    {
        if ($value === null) {
            return true;
        }
        return !! preg_match('/[^a-zA-Z\d]/', $value);
    }

    public function message()
    {
        return 'O campo :attribute não contém caracteres especiais. ex.: @ # $ % & - ? !';
    }
}
