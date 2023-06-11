<?php

/**
 * @return void
 * @throws Exception
 */
function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;

    // Múltiplas exceções | Error <> Exception <  Throwable
    try {
        funcao2();
    } catch (Exception $exception) {
        throw new RuntimeException("Exceção foi tratada, mas foi lançada", 1, $exception);
        echo $exception->getMessage() . PHP_EOL;
    }

    echo 'Saindo da função 1' . PHP_EOL;
}

/**
 * @throws Exception
 * @return mixed
 */
function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

//    Exceção de divisão por zero
//    $divisao = intdiv(5,0);

//    Exceção de index inválido
//    $arrayFixo = new SplFixedArray(2);
//    $arrayFixo[3] = "Valor";

    // Bloco não foi executado pois a exceção está sendo tratada na função1.
    for ($i = 1; $i <= 5; $i++) {
        echo $i . PHP_EOL;
    }

    // Lançando exceção
    $exception = new RuntimeException();
    throw $exception;

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
