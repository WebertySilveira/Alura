<?php

namespace Banco\Service;

use Banco\Modelo\Funcionario\Funcionario;

class ControladorBonificacao
{
    private $totalBonificacoes = 0;

    public function adicionarBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperarTotal():float
    {
        return $this->totalBonificacoes;
    }
}