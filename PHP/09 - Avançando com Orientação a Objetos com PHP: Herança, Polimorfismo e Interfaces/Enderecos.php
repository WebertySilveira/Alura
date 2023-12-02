<?php

use Banco\Modelo\Endereco;

require_once "autoload.php";

$endereco = new Endereco(
    'X',
    'X',
    'X',
    'X',
    'X'
);

echo $endereco->cidade;
echo $endereco->cidade = "teste";
