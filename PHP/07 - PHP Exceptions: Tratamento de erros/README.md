## PHP Exceptions: Tratamento de erros

### 1 - Validando exceções: 
pilha.php
```
// Exceção de index inválido
$arrayFixo = new SplFixedArray(2);
$arrayFixo[3] = "Valor";


// Exceção de divisão por zero
$divisao = intdiv(5,0);

// Estrutura try{} catch(){}
try {
    funcao();
} catch (tipoExcecao $variavel) {
    echo "Aconteceu um erro na função";
}

// PHP 7.1 -> Multiplos tratamentos no catch

// Finally -> Executa mesmo quando não houveram exceções

```

