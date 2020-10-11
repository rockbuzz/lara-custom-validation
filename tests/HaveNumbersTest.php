<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\HaveNumbers;

class HaveNumbersTest extends TestCase
{

    /**
     * @test
     */
    public function itShouldFailWhenHaveNumbersIsInvalid()
    {
        $this->assertFalse($this->haveNumbers()->passes(
            'haveNumbers',
            'blablabla'
        ));
    }

    /**
     * @test
     */
    public function itShouldFailWhenHaveNumbersIsValid()
    {
        $this->assertTrue($this->haveNumbers()->passes(
            'haveNumbers',
            'blabla2bla'
        ));
        $this->assertTrue($this->haveNumbers()->passes(
            'haveNumbers',
            'blabla0bla'
        ));
        $this->assertTrue($this->haveNumbers()->passes(
            'haveNumbers',
            null
        ));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute must contain numbers',
            $this->haveNumbers()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute deve conter números',
            $this->haveNumbers()->message()
        );
    }

    protected function haveNumbers()
    {
        return new HaveNumbers();
    }
}
