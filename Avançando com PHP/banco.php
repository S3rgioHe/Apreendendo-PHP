<?php

require_once 'functions.php';

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
    '374-484-388-92' => [
        'nome' => 'João',
        'saldo' => 100
    ]
];
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Banco exemplar</h1>
    </header>
    <main>

        <h2>lista de clientes: </h2>
        <?php listarUsers() ?>
        <?php verificarSaldo('teste') ?>
    </main>
</body>
</html>
