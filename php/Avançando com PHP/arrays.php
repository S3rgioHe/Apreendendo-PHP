<?php

$aluno1 = [
    "nome" => "Ségio",
    "numero" => "18"
];

$aluno2 = [
    "nome" => "Vinicius",
    "numero" => "17"
];

$aluno3 = [
    "nome" => "Wellya",
    "numero" => "17"
];

$AlunosSesi = [$aluno1, $aluno2, $aluno3];

$buscarPor = "vinicius";

$buscarPor = $buscarPor.CASE_UPPER;

for ($i = 0; $i < count($AlunosSesi); $i++) {

    if ($buscarPor == $AlunosSesi[$i] ["nome"].CASE_UPPER) {
        echo "achamos a puta de uma gostosa e aqui está os dados: " . PHP_EOL;
        echo $AlunosSesi[$i] ["nome"] . PHP_EOL;
        echo $AlunosSesi[$i] ["numero"] . PHP_EOL;
    }

}










