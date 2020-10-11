<?php

namespace Tests;

use Tests\Stubs\User;
use Rockbuzz\LaraCustomValidation\Rules\MatchOldPassword;

class MatchOldPasswordTest extends TestCase
{

    /**
     * @test
     */
    public function itShouldFailWhenValueIsDifferentFromTheCurrentPassword()
    {
        $user = new User('12345678');

        $this->assertFalse($this->matchOldPassword($user)->passes('slug', 'any_password'));
    }

    /**
     * @test
     */
    public function itShouldSuccessWhenValueIsNotDifferentFromTheCurrentPassword()
    {
        $user = new User('12345678');

        $this->assertTrue($this->matchOldPassword($user)->passes('slug', '12345678'));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute does not match',
            $this->matchOldPassword()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute não corresponde',
            $this->matchOldPassword()->message()
        );
    }

    protected function matchOldPassword($user = null)
    {
        return new MatchOldPassword($user);
    }
}
