<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\HaveUppercases;

class HaveUppercasesTest extends TestCase
{

    /**
     * @test
     */
    public function itShouldFailWhenHaveLettersIsInvalid()
    {
        $this->assertFalse($this->haveUppercases()->passes(
            'haveUppercases',
            '123456#@d'
        ));
    }

    /**
     * @test
     */
    public function itShouldPassesWhenHaveLettersIsValid()
    {
        $this->assertTrue($this->haveUppercases()->passes(
            'haveUppercases',
            'blablaHbla'
        ));
        $this->assertTrue($this->haveUppercases()->passes(
            'haveUppercases',
            'BLABLABLA'
        ));
        $this->assertTrue($this->haveUppercases()->passes(
            'haveUppercases',
            null
        ));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute must contain uppercases letters',
            $this->haveUppercases()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute deve conter letras maiúsculas',
            $this->haveUppercases()->message()
        );
    }

    protected function haveUppercases()
    {
        return new HaveUppercases();
    }
}
