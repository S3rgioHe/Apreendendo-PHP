<?php

$contasCorrentes = [
    '183-838-298-09' => [
        'nome' => 'Freddie',
        'saldo' => 4000
    ],
    '393-838-298-08' => [
        'nome' => 'Brian',
        'saldo' => 4000
    ],
    '853-838-298-07' => [
        'nome' => 'Roger',
        'saldo' => 5000
    ],
    '143-838-298-06' => [
        'nome' => 'John',
        'saldo' => 5800
    ],
    '188-838-298-05' => [
        'nome' => 'Mike',
        'saldo' => 2100
    ],
    '173-838-298-04' => [
        'nome' => 'Barry',
        'saldo' => 4500
    ],
    '483-838-298-03' => [
        'nome' => 'Doug',
        'saldo' => 6000
    ],
];

function listarUsers() {
    global $contasCorrentes;
    foreach($contasCorrentes as $conta) {
        echo $conta['nome'] . PHP_EOL;
    }
}

function sacarDaConta(string $identifier, float $value)
{    
    global $contasCorrentes;

    if (strlen($identifier) != 14) {
        foreach($contasCorrentes as $key => $contas) {
            if(is_string($identifier)) {
                if($contas['nome'] == $identifier) {
                    $cpf = $key;
                }
            } else {
                echo "Valor inválido";
            }
        }
    } else {
        $cpf = $identifier;
    }

    echo 'OLá ' . $contasCorrentes[$cpf] ['nome'] . ' sua conta tem o saldo de: ' . $contasCorrentes[$cpf] ['saldo'] . PHP_EOL;
    if ($value > $contasCorrentes[$cpf] ['saldo']) {
        echo "impossível de realizar esse saque, o valor máximo disponível é de: " . $contasCorrentes[$cpf] ['saldo'] . PHP_EOL;
    } else {
        $contasCorrentes[$cpf] ['saldo'] -= $value;https://cursos.alura.com.br/formacao-desenvolvedor-php
        echo "O saque foi realizado com sucesso, seu novo saldo é de: " . $contasCorrentes[$cpf] ['saldo'] . PHP_EOL;
    }
}


function depositarNaConta(string $identifier, float $value) 
{
    global $contasCorrentes;
    echo "Olá " . $contasCorrentes[$identifier] ['nome'] . PHP_EOL; 
    if($value > 0) {
        $contasCorrentes[$identifier] ['saldo'] += $value;
        echo "Seu saldo era de: " . ($contasCorrentes[$identifier] ['saldo'] - $value) . PHP_EOL . "Agora: " . $contasCorrentes[$identifier] ['saldo'] . PHP_EOL; 
    
    } else {
        echo "Input errado!" . PHP_EOL;
    }
}

listarUsers();
sacarDaConta('Freddie', 1000);
depositarNaConta('183-838-298-09', -5000);





