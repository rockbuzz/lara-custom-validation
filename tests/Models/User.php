<?php

namespace Tests\Models;

class User
{
    public $password;

    public function __construct(string $password)
    {
        $this->password = bcrypt($password);
    }
}
