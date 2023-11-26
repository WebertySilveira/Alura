<?php

class Cpf
{
    private string $numeroCpf;

    /**
     * @param $numeroCpf
     */
    public function __construct($numeroCpf)
    {
        $this->validarCpfTitular($numeroCpf);
        $this->numeroCpf = $numeroCpf;
    }

    /**
     * @param string $cpfTitular
     * @return void
     */
    public function validarCpfTitular(string $cpfTitular): void
    {
        if (strlen($cpfTitular) < 11) {
            echo "CPF inválido";
            exit();
        }
    }

    /**
     * @return string
     */
    public function recuperarNumeroCpf(): string
    {
        return $this->numeroCpf;
    }
}