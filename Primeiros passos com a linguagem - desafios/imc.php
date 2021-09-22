<?php

$heigh = 1.76;
$weight = 80;

$imc = number_format($weight / $heigh ** 2, 2);
echo "Seu imc é: $imc" . PHP_EOL;

if ($imc > 39.9) {
    $classification = "OBESIDADE GRAVE";
} else if ($imc > 29.9) {
    $classification = "OBESIDADE";
} else if ($imc > 25) {
    $classification = "SOBREPESO";
} else if ($imc > 18.5) {
    $classification = "NORMAL";
} else {
    $classification = "MAGREZA";
}

echo "A interpretação do seu imc é: $classification" . PHP_EOL;

