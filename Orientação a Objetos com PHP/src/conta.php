<?php

Class Conta
{
    public string $cpfTitular = '';
    public string $nomeTitular = '';
    public float $saldo = 0;

    public function sacar(float $parameter): void
    {
        if($parameter < $this->saldo) {
            $this->saldo -= $parameter;
            return;
        }
        echo "Você tá muito pobre para sacar, podemos fazer um emprestimo com 400% de juros, se quiser";
    }
    public function depositar(float $parameter): void
    {
        if ($parameter > 0) {
            $this->saldo += $parameter;
            return;
        }
        echo "valor inválido" . PHP_EOL;
    }

    public  function transferir(float $valorTransferir, Conta $destino): void
    {
        if($valorTransferir < $this->saldo) {
            $this->sacar($valorTransferir);
            $destino->depositar($valorTransferir);
            return;
        }
        echo "impossível transferir!" . PHP_EOL;
    }
}

$contaUm = new Conta();
$contaDois = new Conta();

$contaUm->depositar(1000);
$contaDois->depositar(2000);


