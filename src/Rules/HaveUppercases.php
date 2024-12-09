<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class HaveUppercases implements Rule
{

    public function passes($attribute, $value): bool
    {
        if ($value === null) {
            return true;
        }
        return !! preg_match('/[A-Z]/', $value);
    }

    public function message()
    {
        return trans('customValidation::messages.have_uppercases');
    }
}
