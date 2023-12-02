<?php

namespace Banco\Modelo\Funcionario;

use Banco\Modelo\Cpf;
use Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    /**
     * @param string $nome
     * @param Cpf $cpf
     * @param string $cargo
     * @param float $salario
     */
    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    /**
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * @return string
     */
    public function getCargo(): string
    {
        return $this->cargo;
    }

    public function aumento(float $aumento)
    {
        if ($aumento < 0) {
            echo "Não positivo!";
            return;
        }

        $this->salario += $aumento;
    }

    abstract public function calculaBonificacao(): float;
}