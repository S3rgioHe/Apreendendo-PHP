<?php

function verificarIndentificador(string $parameter) {
    global $contasCorrentes;
    if (mb_strlen($parameter) != 14) {
        foreach($contasCorrentes as $key => $conta) {
            if (mb_strtolower($conta['nome'] == mb_strtolower($parameter))) {
                return $key;
            }
        }
    } else {
        return $parameter;
    }
}

function listarUsers() {
    global $contasCorrentes;
    foreach($contasCorrentes as $nome => $conta) {
     echo "<li> <p>Titular: {$conta['nome']}, com o saldo <strong>{$conta['saldo']}</strong></p> </li>" . PHP_EOL;
    }
}

function sacarDaConta(string $identifier, float $value)
{    
    global $contasCorrentes;

    $cpf = verificarIndentificador($identifier);

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

function removerConta(string $identifier)
{
    $cpf = verificarIndentificador($identifier);
    unset($contasCorrentes[$cpf]);
}

function verificarSaldo($identifier) 
{
    global $contasCorrentes;
    $cpf = verificarIndentificador($identifier);

    echo "<h3>Verificando a conda de {$contasCorrentes[$cpf] ['nome']} </h3>";
    
    if ($contasCorrentes[$cpf] ['saldo'] > 0) {
        echo "<h2> Há saldo disponível na conta! </h2>";
    } else {
        echo "<h2>Não há saldo disponível na conta</h2>";
    }
}

