<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class MatchOldPassword implements Rule
{
    private $user;

    private $nullable;

    public function __construct($user = null, bool $nullable = false)
    {
        $this->user = $user ?: auth()->user();

        $this->nullable = $nullable;
    }

    public function passes($attribute, $value): bool
    {
        if ($value === null && $this->nullable) {
            return true;
        }
        
        return Hash::check($value, $this->user->password);
    }

    public function message()
    {
        return trans('customValidation::messages.match_old_password');
    }
}
