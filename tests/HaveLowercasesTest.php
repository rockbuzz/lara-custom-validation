<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\HaveLowercases;

class HaveLowercasesTest extends TestCase
{

    /**
     * @test
     */
    public function itShouldFailWhenHaveLettersIsInvalid()
    {
        $this->assertFalse($this->haveLowercases()->passes(
            'haveLowercases',
            '123456#@A'
        ));
    }

    /**
     * @test
     */
    public function itShouldPassesWhenHaveLettersIsValid()
    {
        $this->assertTrue($this->haveLowercases()->passes(
            'haveLowercases',
            'blablaHbla'
        ));
        $this->assertTrue($this->haveLowercases()->passes(
            'haveLowercases',
            'blablabla'
        ));
        $this->assertTrue($this->haveLowercases()->passes(
            'haveLowercases',
            null
        ));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute must contain lowercases letters',
            $this->haveLowercases()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute deve conter letras minúsculas',
            $this->haveLowercases()->message()
        );
    }

    protected function haveLowercases()
    {
        return new HaveLowercases();
    }
}
