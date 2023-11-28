<?php

namespace Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    /**
     * @return void
     */
    protected function percentualTarifa(): float
    {
        return 0.05;
    }
}