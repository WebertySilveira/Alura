<?php

/**
 * @property Cpf $cpf
 */
class Cliente
{

    /**
     * @var string
     */
    private string $nome;

    private Cpf $cpf;

    /**
     * @param Cpf $cpf
     * @param string $nome
     */
    public function __construct(Cpf $cpf, string $nome)
    {
        $this->validaNomeTitular($nome);

        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
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

    /**
     * @return object
     */
    public function recuperarCpfCliente(): string
    {
        return $this->cpf->recuperarNumeroCpf();
    }
}