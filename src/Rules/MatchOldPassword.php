<?php

namespace Rockbuzz\LaraCustomValidation\Rules;

use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Validation\Rule;

class MatchOldPassword implements Rule
{
    private $nullable;
    private $user;

    public function __construct(bool $nullable = false, $user = null)
    {
        $this->nullable = $nullable;        
        $this->user = $user ?: auth()->user();
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
