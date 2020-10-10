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
        $this->assertFalse($this->specialCharacters()->passes(
            'specialCharacters',
            'blablabla'
        ));
    }

    /**
     * @test
     */
    public function itShouldFailWhenHaveSpecialCharactersIsValid()
    {
        $this->assertTrue($this->specialCharacters()->passes(
            'specialCharacters',
            'blabla!bla'
        ));
        $this->assertTrue($this->specialCharacters()->passes(
            'specialCharacters',
            'blabla@bla'
        ));
        $this->assertTrue($this->specialCharacters()->passes(
            'specialCharacters',
            'blabla#bla'
        ));
        $this->assertTrue($this->specialCharacters()->passes(
            'specialCharacters',
            'blabla%bla'
        ));
        $this->assertTrue($this->specialCharacters()->passes(
            'specialCharacters',
            'blabla~bla'
        ));
        $this->assertTrue($this->specialCharacters()->passes(
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
            'customValidation::messages.have_special_characters',
            $this->specialCharacters()->message()
        );
    }

    protected function specialCharacters()
    {
        return new HaveSpecialCharacters();
    }
}
