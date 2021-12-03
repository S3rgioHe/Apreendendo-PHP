<?php

$arraySimples = [
    '195-278-193-01' => [
        'nome' => 'Teste1',
        'numero' => 3978329958
    ],
    '293-294-193-02' => [
        'nome' => 'Teste2',
        'numero' => 2304047383
    ],
    '940-493-294-03' => [
        'nome' => 'Teste3',
        'numero' => 3746584949
    ]
];

$arraySimples['947-274-193-04'] = [
    'nome' => 'teste de adição',
    'numero' => 20974937957
];

$arraySimples['084-974-739-05'] = [
    'nome' => 'teste de adição sem index',
    'numero' => 957373838
];

foreach ($arraySimples as $cpf => $simples) {
    echo $cpf . " " . $simples['nome'] . PHP_EOL;
}

//os arrays só podem usar int, string


