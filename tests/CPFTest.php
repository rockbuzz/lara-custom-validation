<?php

namespace Tests;

use Rockbuzz\LaraCustomValidation\Rules\CPF;

class CPFTest extends TestCase
{
    /**
     * @test
     */
    public function itShouldFailWhenCnpjIsInvalid()
    {
        $this->assertFalse($this->cpf()->passes('cpf', '436.338.431-01'));
    }

    /**
     * @test
     */
    public function itShouldPassWhenCnpjIsValid()
    {
        $this->assertTrue($this->cpf()->passes('cpf', '436.338.431-08'));
        $this->assertTrue($this->cpf()->passes('cpf', null));
    }

    /**
     * @test
     */
    public function itShouldReturnMessage()
    {
        $this->assertEquals(
            'The :attribute must be a valid CPF',
            $this->cpf()->message()
        );

        app()->setLocale('pt-br');

        $this->assertEquals(
            'O :attribute deve ser um CPF válido',
            $this->cpf()->message()
        );
    }

    protected function cpf()
    {
        return new CPF();
    }
}
