<?php

namespace Banco\Modelo\Conta;

use Banco\Modelo\Autenticavel;
use Banco\Modelo\Cpf;
use Banco\Modelo\Endereco;
use Banco\Modelo\Pessoa;

/**
 * @property Pessoa $pessoa
 */
class Cliente extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    /**
     * @param string $nome
     * @param Cpf $cpf
     * @param Endereco $endereco
     */
    public function __construct(string $nome, Cpf $cpf, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === "abcd";
    }
}