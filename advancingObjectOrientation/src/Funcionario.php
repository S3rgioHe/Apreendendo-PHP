<?php

class Funcionario extends Pessoa
{
    private string $name;
    private CPF $cpf;
    private string $cargo;

    public function __construct(string $name, CPF $cpf, string $cargo)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function getCargo()
    {
        return $this->cargo;
    }


    function setCargo(string $value)
    {
        $this->cargo = $value;
    }
}