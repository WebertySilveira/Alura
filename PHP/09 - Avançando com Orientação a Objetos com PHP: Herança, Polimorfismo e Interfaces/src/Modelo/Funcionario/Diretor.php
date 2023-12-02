<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\Autenticavel;

class Diretor extends Funcionario implements Autenticavel
{
    public function calculaBonificacao(): float
    {
        return $this->getSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        if ($senha == '1234') {
            return true;
        }

        return false;
    }
}