<?php

namespace Banco\Modelo;

class Funcionario extends Pessoa
{
    private string $cargo;

    /**
     * @param string $nome
     * @param Cpf $cpf
     * @param string $cargo
     */
    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);
        $this->cargo = $cargo;
    }

    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }
}