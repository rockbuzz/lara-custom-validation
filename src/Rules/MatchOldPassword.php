<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class MatchOldPassword implements Rule
{
    private $user;

    public function __construct($user = null)
    {
        $this->user = $user ?: auth()->user();
    }

    public function passes($attribute, $value): bool
    {
        if ($value === null) {
            return true;
        }
        
        return Hash::check($value, $this->user->password);
    }

    public function message()
    {
        return trans('customValidation::messages.match_old_password');
    }
}
