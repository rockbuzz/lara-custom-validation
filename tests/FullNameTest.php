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
            'customValidation::messages.full_name',
            $this->fullName()->message()
        );
    }

    protected function fullName()
    {
        return new FullName();
    }
}
