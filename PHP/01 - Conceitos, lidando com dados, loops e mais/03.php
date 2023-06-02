<?php

/**
 * @param float $peso
 * @param float $altura
 * @return void
 * @throws Exception
 */
function calcularIMC($peso, $altura) {
    $imc = round(
        $peso / ($altura ** 2), 2
    );

    switch ($imc) {
        case ($imc < 18.5):
            echo("O IMC de {$imc} é classificado como MAGREZA <br>");
            echo("OBESIDADE (grau) 0");
            break;
        case ($imc > 18.5 && $imc < 24.9):
            echo("O IMC de {$imc} é classificado como NORMAL <br>");
            echo("OBESIDADE (grau) 0");
            break;
        case ($imc > 25 && $imc < 29.9):
            echo("O IMC de {$imc} é classificado como SOBREPESO <br>");
            echo("OBESIDADE (grau) I");
            break;
        case $imc > 30 && $imc < 39.9:
            echo("O IMC de {$imc} é classificado como OBESIDADE <br>");
            echo("OBESIDADE (grau) II");
            break;
        case $imc > 40:
            echo("O IMC de {$imc} é classificado como OBESIDADE GRAVE <br>");
            echo("OBESIDADE (grau) III");
            break;
        default:
            throw new \Exception('Valor inválido, tente novamente!');

    }
}

try {
    calcularIMC(69.2, 1.70);
} catch (Exception $excecao) {
    echo $excecao;
}