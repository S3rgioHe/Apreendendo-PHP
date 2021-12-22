<?php

class Pessoa 
{
    private string $name;
    private CPF $cpf;

    public function __construct(string $name, CPF $cpf)
    {
        $this->nome = validateName($name);
        $this->cpf = $cpf;
    }

    private function validateName(string $name)
    {
        if (strlen($name) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        } else {
            return $name;
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpfNumber();
    }
}
