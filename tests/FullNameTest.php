<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\FullName;

class FullNameTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldFailWhenFullNameIsInvalid()
    {
        $this->assertFalse($this->fullName()->passes('withSpace', 'abc'));
    }

    /**
     * @test
     */
    public function itShouldFailWhenFullNameIsValid()
    {
        $this->assertTrue($this->fullName()->passes('withSpace', 'abc def'));
        $this->assertTrue($this->fullName()->passes('withSpace', null));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute must be a full name',
            $this->fullName()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute deve ser um nome completo',
            $this->fullName()->message()
        );
    }

    protected function fullName()
    {
        return new FullName();
    }
}
