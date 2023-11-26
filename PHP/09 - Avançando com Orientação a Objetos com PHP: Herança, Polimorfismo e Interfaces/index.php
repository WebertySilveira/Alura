<?php

/**
 * Pega a classe que foi solicitada e faz o require trocando pelo nome da pasta e tratando as barras.
 */
spl_autoload_register(function (string $nome) {
    $caminho = str_replace("Banco", 'src', $nome);

    // Inverter barras do path (Prevê diferenças entre windows e linux)
    $caminho = str_replace("\\", DIRECTORY_SEPARATOR, $caminho);
    $caminho .= ".php";

    if (file_exists($caminho)) {
        require_once $caminho;
    }
});

use Banco\Modelo\Conta\Conta;
use Banco\Modelo\Cpf;
use Banco\Modelo\Endereco;
use Banco\Modelo\Funcionario;
use Banco\Modelo\Conta\Cliente;

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