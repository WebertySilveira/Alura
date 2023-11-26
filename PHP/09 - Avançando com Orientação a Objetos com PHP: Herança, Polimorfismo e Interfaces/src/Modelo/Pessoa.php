<?php

namespace Banco\Modelo;

/**
 * @property Cpf $cpf
 */
class Pessoa
{
    /**
     * @var string
     */
    protected string $nome;

    /**
     * @var Cpf
     */
    protected Cpf $cpf;

    /**
     * @param string $nome
     * @param Cpf $cpf
     */
    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNomeTitular($nome);

        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf->recuperarNumeroCpf();
    }

    /**
     * @param string $cpfTitular
     * @return void
     */
    private function validaNomeTitular(string $cpfTitular): void
    {
        if (strlen($cpfTitular) < 5) {
            echo "Nome precisa ter mais de 5 caracteres";
            exit();
        }
    }
}