<?php

/**
 * @param int $numero
 * @return void
 */
function tabuadaMultiplicacao($numero)
{
    for ($i = 1; $i <= 9; $i++) {
        $multiplicacao = $numero * $i;

        echo("{$numero} X {$i} = " . $multiplicacao . "<br>");
    }
}

tabuadaMultiplicacao(7);