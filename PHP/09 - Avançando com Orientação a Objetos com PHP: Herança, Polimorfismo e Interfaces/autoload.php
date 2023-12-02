<?php

/**
 * Pega a classe que foi solicitada e faz o require trocando pelo nome da pasta e tratando as barras.
 */
spl_autoload_register(function (string $nome) {
    $caminho = str_replace("Banco", 'src', $nome);

    // Inverter barras do path (Prevê diferenças entre windows e linux)
    $caminho = str_replace("\\", DIRECTORY_SEPARATOR, $caminho);
    $caminho .= ".php";

    if (file_exists($caminho)) {
        require_once $caminho;
    }
});