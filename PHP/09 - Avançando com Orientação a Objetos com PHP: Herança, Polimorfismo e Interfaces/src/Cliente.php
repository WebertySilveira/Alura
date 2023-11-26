<?php

require_once 'src/Pessoa.php';

/**
 * @property Pessoa $pessoa
 */
class Cliente extends Pessoa
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
}