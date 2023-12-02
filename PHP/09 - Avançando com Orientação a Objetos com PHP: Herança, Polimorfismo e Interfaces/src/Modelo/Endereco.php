<?php

namespace Banco\Modelo;

/**
 * @@property-read string $rua
 * @@property-read string $bairro
 * @@property-read string $cidade
 * @@property-read string $estado
 */
final class Endereco
{

    use AcessarPropriedades;

    /**
     * @var string
     */
    private string $estado;
    /**
     * @var string
     */
    private string $cidade;
    /**
     * @var string
     */
    private string $bairro;
    /**
     * @var string
     */
    private string $rua;
    /**
     * @var string
     */
    private string $numero;

    /**
     * @param string $estado
     * @param string $cidade
     * @param string $bairro
     * @param string $rua
     * @param string $numero
     */
    public function __construct(string $estado, string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getEstado(): string
    {
        return $this->estado;
    }

    /**
     * @return string
     */
    public function getCidade(): string
    {
        return $this->cidade;
    }

    /**
     * @return string
     */
    public function getBairro(): string
    {
        return $this->bairro;
    }

    /**
     * @return string
     */
    public function getRua(): string
    {
        return $this->rua;
    }

    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}, {$this->estado}";
    }
}