## Conceitos, lidando com dados, loops e mais


### DESAFIOS
01 - Exibir todos os números ímpares até 100

```
for ($contador = 1; $contador < 100; $contador++) {
    if ($contador % 2 != 0) {
        echo "{$contador} é ímpar; <br>";
    }
}
```

02 - Exibir a tabuada de determinado número

```
/**
 * @param $numero
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
```

03 - Calcular o IMC a partir da altura e peso

```

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
```