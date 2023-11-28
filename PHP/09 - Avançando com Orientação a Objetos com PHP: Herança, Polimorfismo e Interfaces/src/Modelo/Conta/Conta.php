<?php

namespace Banco\Modelo\Conta;

/**
 * Class Conta
 *
 * @property Cliente $cliente
 */
abstract class Conta
{
    /**
     * @var float
     */
    protected float $saldo;
    /**
     * @var Cliente
     */
    private Cliente $cliente;

    private static int $quantidadeDeContas = 0;

    /**
     * @param Cliente $cliente
     * @param float $saldo
     */
    public function __construct(Cliente $cliente, float $saldo)
    {
        $this->validarSaldo($saldo);
        $this->cliente = $cliente;
        $this->saldo = $saldo;

        self::$quantidadeDeContas++;
    }

    public function __destruct()
    {
        if (self::$quantidadeDeContas > 2) {
            echo "Há mais de uma conta ativa!";
        }
    }

    /**
     * @param float $valorASacar
     * @return string|void
     */
    public function sacar(float $valorASacar)
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();

        $saque = $valorASacar + $tarifaSaque;
        if ($this->saldo < $saque) {
            return "Saldo indisponível";
        }


        $this->saldo -= $saque;
    }

    /**
     * @param float $valorDeposito
     * @return void
     */
    public function depositar(float $valorDeposito)
    {
        if ($valorDeposito < 0) {
            return "valor precisa ser maior que zero";
        }

        $this->saldo += $valorDeposito;
    }

    /**
     * @return float
     */
    public function recuperarSaldo(): float
    {
        return $this->saldo;
    }

    /**
     * @param float $saldo
     * @return void
     */
    public function validarSaldo(float $saldo): void
    {
        if ($saldo < 0) {
            echo "Saldo inválido";
            exit();
        }
    }

    /**
     * @return int
     */
    public static function recuperarNumeroDeContas()
    {
        return self::$quantidadeDeContas;
    }

    /**
     * @return null
     */
    public function recuperarNomeCliente()
    {
        return $this->cliente->getNome();
    }

    /**
     * @return string
     */
    public function recuperarCpfCliente(): string
    {
        return $this->cliente->getCpf();
    }

    /**
     * @return void
     */
    abstract protected function percentualTarifa(): float;
}