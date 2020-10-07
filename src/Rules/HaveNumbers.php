<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class HaveNumbers implements Rule
{

    public function passes($attribute, $value): bool
    {
        if ($value === null) {
            return true;
        }
        return !! preg_match('~[0-9]~', $value);
    }

    public function message()
    {
        return trans('customValidation::messages.have_numbers');
    }
}
