<?php

$start = 10;
$start /= 2;

for ($i=1; $i < 30; $i++) {
    $start += $start;
    echo "dia $i: " . $start . PHP_EOL;
}

