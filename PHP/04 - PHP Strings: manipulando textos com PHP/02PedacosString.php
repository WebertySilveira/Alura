<?php

// Pegando pedaços de uma string

$email = "mail@gmail.com.br";
$senha = "1234";


// Conta o número de caracteres
// (Conta os caracteres com assento como dois)
if (mb_strlen($senha) < 8) {
    echo "Senha fraca";
}

//$posicaoArroba = 4;
$posicaoArroba = strpos($email, "@");

$usuario = substr($email, 0, $posicaoArroba);

// Tornar maiúscula
// Não altera com assentos
echo strtoupper($usuario);

// Tornar minúscula
// Não altera com assentos
echo strtolower($usuario);

