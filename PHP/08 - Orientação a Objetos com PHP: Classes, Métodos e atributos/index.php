<?php

require_once 'src/Cpf.php';
require_once 'src/Cliente.php';
require_once 'src/Conta.php';

$cliente1 = new Cliente(new Cpf("999.999.999-99"), 'Weberty');
$conta1 = new Conta($cliente1, 200);

$cliente2 = new Cliente(new Cpf('111.111.111-11'), 'SILVEIRA');
$conta2 = new Conta($cliente2, 0);

$cliente3 = new Cliente(new Cpf('222.222.222-22'), 'Sousa');
$conta3 = new Conta($cliente3, 0);

$conta1->sacar(100);
echo "1°" . PHP_EOL;
echo "Nome: {$conta1->recuperarNomeCliente()}" . PHP_EOL;
echo "CPF: {$conta1->recuperarCpfCliente()}" . PHP_EOL;
echo "Saldo: {$conta1->recuperarSaldo()}" . PHP_EOL;
echo "----------------------------------------------------" . PHP_EOL;

$conta1->depositar(100);
echo "2 -> {$conta1->recuperarSaldo()}" . PHP_EOL;

$conta2->sacar(200);
echo "3 -> {$conta2->recuperarSaldo()}" . PHP_EOL;

$conta2->depositar(100);
echo "4 -> {$conta2->recuperarSaldo()}" . PHP_EOL;

echo "CONTAS CADASTRADAS: " . Conta::recuperarNumeroDeContas() . PHP_EOL;