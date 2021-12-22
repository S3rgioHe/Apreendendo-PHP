<?php

class Funcionario
{
    private string $nome;
    private CPF $cpf;
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    function setNome(string $value)
    {
        $this->nome = $value;
    }

    function setCpf(string $value)
    {
        $this->cpf = $value;
    }

    function setCargo(string $value)
    {
        $this->cargo = $value;
    }
}