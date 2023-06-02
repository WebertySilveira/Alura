<?php

$telefones = [
    "(99) 99999 - 9999",
    "(88) 88888 - 8888",
    "(77) 77777 - 7777",
];

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        '/^\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}$/',
        $telefone,
        $verificacoes
    );

    if ($telefoneValido) {
        echo "Válido";
    }

    echo "<hr>";
    echo preg_replace(
        '/(^\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/',
        '(XX) \2',
        $telefone
    );


}