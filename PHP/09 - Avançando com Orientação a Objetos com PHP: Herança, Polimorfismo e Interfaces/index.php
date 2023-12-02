<?php

require_once "autoload.php";

use Banco\Service\{ControladorBonificacao, Autenticador};
use Banco\Modelo\{Cpf, Endereco};
use Banco\Modelo\Conta\{Conta, ContaPoupanca, Cliente};
use Banco\Modelo\Funcionario\
{Funcionario, Desenvolvedor, EditorVideo, Gerente, Diretor};

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
$funcionario = new Desenvolvedor(
    "John Doe",
    new Cpf("111.111.111-11"),
    3000
);

$conta = new ContaPoupanca($cliente, 0, 1);
$conta->depositar(200);
$conta->sacar(100);

echo "1°" . PHP_EOL;
echo "Nome: {$conta->recuperarNomeCliente()}" . PHP_EOL;
echo "CPF:" . $conta->recuperarCpfCliente() . PHP_EOL;
echo "Saldo: {$conta->recuperarSaldo()}" . PHP_EOL;
echo "----------------------------------------------------" . PHP_EOL;

$controlador = new ControladorBonificacao();
$controlador->adicionarBonificacao($funcionario);

echo "Consultor: {$funcionario->getCpf()}" . PHP_EOL;
echo "CONTAS CADASTRADAS: " . Conta::recuperarNumeroDeContas() . PHP_EOL;
echo "Bonificacao: {$controlador->recuperarTotal()}" . PHP_EOL;

echo "----------------------------------------------------" . PHP_EOL;
echo "Salário: {$funcionario->getSalario()}" . PHP_EOL;
//$funcionario->promocao();
echo "Novo salário: {$funcionario->getSalario()}" . PHP_EOL;

echo "----------------------------------------------------" . PHP_EOL;
$autenticar = new Autenticador();
//echo "{$autenticar->login($funcionario, '1234')}";


$funcionario->nome;