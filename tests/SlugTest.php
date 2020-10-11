<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\Slug;

class SlugTest extends TestCase
{

    /**
     * @test
     */
    public function itShouldFailWhenSlugIsInvalid()
    {
        $this->assertFalse($this->slug()->passes('slug', 'full name'));
    }

    /**
     * @test
     */
    public function itShouldFailWhenSlugIsValid()
    {
        $this->assertTrue($this->slug()->passes('slug', 'full-name'));
        $this->assertTrue($this->slug()->passes('slug', null));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute must contain a valid URI',
            $this->slug()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute deve conter uma URI válida',
            $this->slug()->message()
        );
    }

    protected function slug()
    {
        return new Slug();
    }
}
