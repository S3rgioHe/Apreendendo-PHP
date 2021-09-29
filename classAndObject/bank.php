<?php

require_once 'account.php';
require_once 'holder.php';

$newAccount = new Account(new Holder('169.996.335-09', 'Platão'));

var_dump($newAccount);

echo str_repeat("-", 70) . PHP_EOL;

echo $newAccount->getName() . PHP_EOL;
echo $newAccount->getCpf() . PHP_EOL;

$twoAccount = new Account(new Holder('375.643.644-09', 'Rodolfo'));

echo str_repeat("-", 70) . PHP_EOL;

$newAccount->deposit(3000);

echo "Conta One" . $newAccount->getBalance() . PHP_EOL;

echo "Metodo transfer de One para two 1000..." . PHP_EOL;
$newAccount->transfer(1000, $twoAccount);

echo "Conta Two" . $twoAccount->getBalance() . PHP_EOL;

echo str_repeat("-", 70) . PHP_EOL;

echo "sacando dinheiro... $/n Conta One com 2000 mil depois do transfer, realizado saque de 1000 agora" . PHP_EOL;

$newAccount->withdraw(1000);
echo "Conta One: " . $newAccount->getBalance() . PHP_EOL;
echo str_repeat("-", 70) . PHP_EOL;

echo "Numero de contas online: " . Account::getNoAccount() . PHP_EOL;



