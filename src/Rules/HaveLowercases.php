<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class HaveLowercases implements Rule
{

    public function passes($attribute, $value): bool
    {
        if ($value === null) {
            return true;
        }
        return !! preg_match('/[a-z]/', $value);
    }

    public function message()
    {
        return trans('customValidation::messages.have_lowercases');
    }
}
