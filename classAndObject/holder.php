<?php
require_once 'cpf.php';

class Holder {
    private string $name;
    private Cpf $cpf;

    public function __construct(string $cpf, string $name)
    {
        $this->cpf = new Cpf($cpf);
        $this->name = $name;
    }

    public function getCpf():string
    {
        return $this->cpf->getCpf();
    }

    public function getName():string
    {
        return $this->name;
    }

    public function nameValidation(string $name): void
    {
        if(mb_strlen($name) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres" . PHP_EOL;
            exit();
        }
        
    }



}

