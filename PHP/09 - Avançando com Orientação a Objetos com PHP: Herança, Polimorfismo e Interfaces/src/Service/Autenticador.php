<?php

namespace Banco\Service;

use Banco\Modelo\Autenticavel;

class Autenticador
{
    public function login(Autenticavel $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuário logado!";
        } else {
            echo "Senha incorreta!";
        }
    }
}