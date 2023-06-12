<?php

class Titular {
    private $nome;
    /**
     * @var Cpf
     */
    private $cpf;

    public function __construct(Cpf $cpf, $nome)
    {
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome menor que 5 caracteres";
            exit;
        }
    }
}