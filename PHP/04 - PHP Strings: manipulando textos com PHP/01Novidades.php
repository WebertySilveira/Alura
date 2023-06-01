<?php

$nome = 'Nome Sobrenome';

$isMeuSobrenome = str_contains($nome, "Sobrenome");

if ($isMeuSobrenome) {
    echo ("É o meu sobrenome");
}


$url = 'https://google.com.br';

if (str_starts_with($url, "https")) {
    echo "É uma url segura";
}

if (str_ends_with($url, ".br")) {
    echo "É um domínio brasileiro";
}