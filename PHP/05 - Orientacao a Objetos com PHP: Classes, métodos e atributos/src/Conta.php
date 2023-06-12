<?php

class Conta {
    private $titular;
    private $saldo;
    private static $numeroContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numeroContas++;
    }

    public function __destruct()
    {
        self::$numeroContas--;
    }

    /**
     * @return mixed
     */
    public static function getNumeroContas()
    {
        return self::$numeroContas;
    }

    /**
     * @param $operacao
     * @return string
     */
    public function mensagemSucesso($operacao)
    {
        return "{$operacao} realizado com sucesso!" . PHP_EOL;
    }

    /**
     * @param $valorSacar
     * @return string
     */
    public function sacar($valorSaque)
    {
        if ($valorSaque > $this->saldo) {
            return "Saldo indisponível!" . PHP_EOL;
        }

        $this->saldo -= $valorSaque;
        return $this->mensagemSucesso("Saque");
    }

    /**
     * @param $valorDeposito
     * @return string
     */
    public function depositar($valorDeposito)
    {
        if ($valorDeposito < 0) {
            return "Valor inválido!" . PHP_EOL;
        }

        $this->saldo += $valorDeposito;
        return $this->mensagemSucesso("Depósito");
    }

    /**
     * @param $valorTransferencia
     * @param Conta $contaDestino
     * @return string
     */

    public function transferir($valorTransferencia, Conta $contaDestino)
    {
        if ($this->saldo < $valorTransferencia) {
            return "Saldo indisponível!" . PHP_EOL;
        }

        $this->sacar($valorTransferencia);
        $contaDestino->depositar($valorTransferencia);

        return $this->mensagemSucesso("Transferência");
    }
}