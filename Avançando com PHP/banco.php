<?php

require_once 'funcoes.php';

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

sacarDaConta('Freddie', 1000);

depositarNaConta('183-838-298-09', 5000);

tudoMaiuscula('183-838-298-09');

removerConta('Doug'); //tchau Doug

listarUsers();





