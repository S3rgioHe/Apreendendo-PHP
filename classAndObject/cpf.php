<?php

class Cpf {
    private string $cpf;

    function __construct($cpfInput)
    {
        $this->cpf = $this->cpfValidation($cpfInput);
    }

    private function cpfValidation($cpfInput): string
    {
        if (strlen($cpfInput) < 14) {
            echo "Cpf invalido";
            exit();
        }
        return $cpfInput;
    }

    public function getCpf():string
    {
        return $this->cpf;
    }

}