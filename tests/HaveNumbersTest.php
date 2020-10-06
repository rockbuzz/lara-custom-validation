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
            'validation.have_numbers',
            $this->haveNumbers()->message()
        );
    }

    protected function haveNumbers()
    {
        return new HaveNumbers();
    }
}
