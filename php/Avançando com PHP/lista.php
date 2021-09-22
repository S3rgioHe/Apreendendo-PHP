<?php

$listaNomes = [
    'Primeiro ser humano' => [
        'nome' => "Freddie"
    ],
    'Segundo ser humano' => [
        'nome' => "POPson"
    ]
];

foreach($listaNomes as $pessoa) {
    ['nome' => $nome] =  $pessoa;
    echo $nome . PHP_EOL;
}


