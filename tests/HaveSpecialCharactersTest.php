<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\HaveSpecialCharacters;

class HaveSpecialCharactersTest extends TestCase
{

    /**
     * @test
     */
    public function itShouldFailWhenHaveSpecialCharactersIsInvalid()
    {
        $this->assertFalse($this->haveSpecialCharacters()->passes(
            'specialCharacters',
            'blablabla'
        ));
    }

    /**
     * @test
     */
    public function itShouldFailWhenHaveSpecialCharactersIsValid()
    {
        $this->assertTrue($this->haveSpecialCharacters()->passes(
            'specialCharacters',
            'blabla!bla'
        ));
        $this->assertTrue($this->haveSpecialCharacters()->passes(
            'specialCharacters',
            'blabla@bla'
        ));
        $this->assertTrue($this->haveSpecialCharacters()->passes(
            'specialCharacters',
            'blabla#bla'
        ));
        $this->assertTrue($this->haveSpecialCharacters()->passes(
            'specialCharacters',
            'blabla%bla'
        ));
        $this->assertTrue($this->haveSpecialCharacters()->passes(
            'specialCharacters',
            'blabla~bla'
        ));
        $this->assertTrue($this->haveSpecialCharacters()->passes(
            'specialCharacters',
            null
        ));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute must contain special characters. @ # $ % & - ? !',
            $this->haveSpecialCharacters()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute deve conter caracteres especiais. @ # $ % & - ? !',
            $this->haveSpecialCharacters()->message()
        );
    }

    protected function haveSpecialCharacters()
    {
        return new HaveSpecialCharacters();
    }
}
