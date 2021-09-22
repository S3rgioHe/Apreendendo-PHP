<?php

function listarUsers() {
    global $contasCorrentes;
    foreach($contasCorrentes as $nome => $conta) {
     echo "<li> <p>Titular: {$conta['nome']}, com o saldo <strong>{$conta['saldo']}</strong></p> </li>" . PHP_EOL;
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

    echo "OLá {$contasCorrentes[$cpf] ['nome']} sua conta tem o saldo de: {$contasCorrentes[$cpf] ['saldo']}" . PHP_EOL;
    if ($value > $contasCorrentes[$cpf] ['saldo']) {
        echo "impossível de realizar esse saque, o valor máximo disponível é de: {$contasCorrentes[$cpf] ['saldo']}" . PHP_EOL;
    } else {
        $contasCorrentes[$cpf] ['saldo'] -= $value;
        echo "O saque foi realizado com sucesso, seu novo saldo é de {$contasCorrentes[$cpf] ['saldo']}" . PHP_EOL;
    }
}


function depositarNaConta(string $identifier, float $value) 
{
    global $contasCorrentes;
    echo "Olá " . $contasCorrentes[$identifier] ['nome'] . PHP_EOL; 
    if($value > 0) {
        $contasCorrentes[$identifier] ['saldo'] += $value;
        echo "Seu saldo era de: " . ($contasCorrentes[$identifier] ['saldo'] - $value) . PHP_EOL;
        echo "Agora: {$contasCorrentes[$identifier] ['saldo']}" . PHP_EOL;
    
    } else {
        echo "Input errado!" . PHP_EOL;
    }
}

function tudoMaiuscula(string $parameter) 
{
    global $contasCorrentes;
    $contasCorrentes[$parameter] ['nome'] = mb_strtoupper($contasCorrentes[$parameter] ['nome']);
}

function removerConta($identifier) {
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
    unset($contasCorrentes[$cpf]);
}

