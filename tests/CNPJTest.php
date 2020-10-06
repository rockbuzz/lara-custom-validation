<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\CNPJ;

class CNPJTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldFailWhenCnpjIsInvalid()
    {
        $this->assertFalse($this->cnpj()->passes('cnpj', '81.552.513/0001-06'));
    }

    /**
     * @test
     */
    public function itShouldPassWhenCnpjIsValid()
    {
        $this->assertTrue($this->cnpj()->passes('cnpj', '81.552.513/0001-07'));
        $this->assertTrue($this->cnpj()->passes('cnpj', null));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'validation.cnpj',
            $this->cnpj()->message()
        );
    }

    protected function cnpj()
    {
        return new CNPJ();
    }
}
