<?php

require_once 'src/Cpf.php';
require_once 'src/Cliente.php';
require_once 'src/Conta.php';
require_once 'src/Endereco.php';
require_once 'src/Funcionario.php';

$cliente = new Cliente(
    "Weberty",
    new Cpf("000.000.000-00"),
    new Endereco(
        "X",
        "X",
        "X",
        "X",
        "X",
    )
);
$funcionario = new Funcionario(
    "John Doe",
    new Cpf("111.111.111-11"),
    "Empacotador"
);
$conta = new Conta($cliente, 200);

$conta->sacar(100);
echo "1°" . PHP_EOL;
echo "Nome: {$conta->recuperarNomeCliente()}" . PHP_EOL;
echo "CPF:" . $conta->recuperarCpfCliente() . PHP_EOL;
echo "Saldo: {$conta->recuperarSaldo()}" . PHP_EOL;
echo "----------------------------------------------------" . PHP_EOL;
echo "Consultor: {$funcionario->getCpf()}" . PHP_EOL;
echo "CONTAS CADASTRADAS: " . Conta::recuperarNumeroDeContas() . PHP_EOL;