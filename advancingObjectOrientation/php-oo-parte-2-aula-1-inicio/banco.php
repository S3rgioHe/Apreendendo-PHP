<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';


$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', new Endereco('cidade exemplo', 'bairro exemplo', 'rua exemplo', 'a1'));
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$enderecoPatriaGomes = new Endereco('Caruaru-pe', 'Boa vista', 'Rua Ademar Ribeiro Costa', '12');

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $enderecoPatriaGomes);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);

$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Gomes', $enderecoPatriaGomes));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
