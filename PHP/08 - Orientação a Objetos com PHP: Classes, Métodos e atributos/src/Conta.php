<?php

/**
 * Class Conta
 *
 * @property Cliente $cliente
 */
class Conta
{
    /**
     * @var float
     */
    private float $saldo;

    private Cliente $cliente;

    /**
     * @var int
     */
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
        if ($this->saldo < $valorASacar) {
            return "Saldo indisponível";
        }

        $this->saldo -= $valorASacar;
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
     * @return object
     */
    public function recuperarNomeCliente(): string
    {
        return $this->cliente->getNome();
    }

    /**
     * @return object
     */
    public function recuperarCpfCliente(): string
    {
        return $this->cliente->recuperarCpfCliente();
    }
}