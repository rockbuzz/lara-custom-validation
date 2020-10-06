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
            'validation.slug',
            $this->slug()->message()
        );
    }

    protected function slug()
    {
        return new Slug();
    }
}
