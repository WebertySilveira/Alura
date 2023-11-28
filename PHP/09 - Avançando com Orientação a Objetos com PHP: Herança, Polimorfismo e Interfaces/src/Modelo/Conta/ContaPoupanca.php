<?php

namespace Banco\Modelo\Conta;

class ContaPoupanca extends Conta
{
    /**
     * @return void
     */
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}