<?php

require_once "src/Conta.php";
require_once "src/Titular.php";
require_once "src/Cpf.php";

$novaConta = new Conta(new Titular(new Cpf("999.999.999-99"), "Nome Sobrenome"));
$segundaConta = new Conta(new Titular(new Cpf("888.888.888-88"), "Nome Sobrenome"));

echo $novaConta->depositar(100);
echo $novaConta->sacar(100);
echo $novaConta->transferir(100, $segundaConta);

echo Conta::getNumeroContas() . PHP_EOL;
unset($segundaConta);
echo Conta::getNumeroContas() . PHP_EOL;