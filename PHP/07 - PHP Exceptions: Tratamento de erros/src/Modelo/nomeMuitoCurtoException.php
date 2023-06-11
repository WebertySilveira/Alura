<?php

namespace Alura\Banco\Modelo;

use Exception;

class nomeMuitoCurtoException extends Exception
{
    public function __construct($tamanho)
    {
        $message = "O nome precisa ter mais de {$tamanho} letras";
        parent::__construct($message);
    }
}