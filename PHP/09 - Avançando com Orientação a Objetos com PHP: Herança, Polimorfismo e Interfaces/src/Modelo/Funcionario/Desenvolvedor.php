<?php

namespace Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    public function promocao()
    {
        $this->aumento($this->getSalario() * 0.75);
    }

    public function calculaBonificacao(): float
    {
        return 500.00;
    }
}