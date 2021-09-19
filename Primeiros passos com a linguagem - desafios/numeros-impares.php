<?php
//mostrar todos os numeros impares entre as variáveis startRange e endRange

$startRange = 0;
$endRange = 100;

for ($startRange; $startRange <= $endRange; $startRange++) {
    if (($startRange % 2) != 0) {
        echo $startRange . PHP_EOL;
    }
}   

