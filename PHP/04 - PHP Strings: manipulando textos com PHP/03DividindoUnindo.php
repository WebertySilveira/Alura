<?php

$nome = "Nome Sobrenome";

// Separando e adicionando a variáveis
list($nome, $sobrenome) = explode(' ', $nome);
echo "Nome: ", $nome . "<br>";
echo "Sobrenome:", $sobrenome;

echo "<hr>";

$telefones = [
    "(99)99999-9999",
    "(88)88888-8888",
    "(77)77777-7777",
];

// Adiciona um separador para cada dado
echo implode('<br>', $telefones);
echo "<hr>";
echo implode(', ', $telefones);


echo ("<hr>");
$error = " Mensagem De Erro! ";

// Removendo espaços antes e depois
$error = trim($error, " ");
// Left
$error = ltrim($error, " ");
// Right
$error = rtrim($error, " ");

if ($error === "Mensagem De Erro!") {
    echo $error;
}