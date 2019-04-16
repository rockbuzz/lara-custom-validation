<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class FullName implements Rule
{

    public function passes($attribute, $value): bool
    {
        if ($value === null) {
            return true;
        }
        if (strlen($value) < 3) {
            return false;
        }

        if (preg_match('/\s/', $value) === 0) {
            return false;
        }

        return true;
    }

    public function message(): string
    {
        return config('custom-validation.messages.full_name');
    }
}
