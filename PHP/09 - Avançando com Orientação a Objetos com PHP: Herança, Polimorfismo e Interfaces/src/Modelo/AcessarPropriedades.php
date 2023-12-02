<?php

namespace Banco\Modelo;

trait AcessarPropriedades
{
    /**
     * Chamar os atributos passando apenas o nome
     * @param string $nome
     * @return mixed
     */
    public function __get(string $nome)
    {
        $atributo = "get" . ucfirst($nome);
        return $this->$atributo();
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}