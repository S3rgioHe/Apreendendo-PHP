<?php

$aluno1 = [
    "nome" => "Ségio",
    "numero" => "18",
];

$aluno2 = [
    "nome" => "Vinicius",
    "numero" => "17",
];

$aluno3 = [
    "nome" => "Wellya",
    "numero" => "17",
];

$AlunosColegio = [$aluno1, $aluno2, $aluno3];

$buscarPor = "vinicius"; 

$buscarPor = $buscarPor.CASE_UPPER;

for ($i = 0; $i < count($AlunosColegio); $i++) {
    if ($buscarPor == $AlunosColegio[$i] ["nome"].CASE_UPPER) {
        echo "achamos, veja os dados aqui:" . PHP_EOL;
        echo $AlunosColegio[$i] ["nome"] . PHP_EOL;
        echo $AlunosColegio[$i] ["numero"] . PHP_EOL;
    }
}
