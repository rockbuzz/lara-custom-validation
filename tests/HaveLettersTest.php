<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\HaveLetters;

class HaveLettersTest extends TestCase
{

    /**
     * @test
     */
    public function itShouldFailWhenHaveLettersIsInvalid()
    {
        $this->assertFalse($this->haveLatters()->passes(
            'haveLatters',
            '123456#@'
        ));
    }

    /**
     * @test
     */
    public function itShouldFailWhenHaveLettersIsValid()
    {
        $this->assertTrue($this->haveLatters()->passes(
            'haveLatters',
            'blablaHbla'
        ));
        $this->assertTrue($this->haveLatters()->passes(
            'haveLatters',
            'BLABLABLA'
        ));
        $this->assertTrue($this->haveLatters()->passes(
            'haveLatters',
            null
        ));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'validation.have_letters',
            $this->haveLatters()->message()
        );
    }

    protected function haveLatters()
    {
        return new HaveLetters();
    }
}
