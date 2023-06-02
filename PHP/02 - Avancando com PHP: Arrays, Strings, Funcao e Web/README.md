## ARRAYS, STRINGS E FUNÇÕES

01 - Iterando em Arrays

```
$idadeList = [21, 23, 19, 25, 30, 41, 18];

for ($i = 0; $i < count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}
```

02 - Iterando em Arrays associativos

```
$conta1 = [
    'titular'=> 'Vinicius',
    'saldo'=>1000
];

$conta2 = [
    'titular'=> 'Maria',
    'saldo'=>10000
];

$contasCorrentes = [$conta1, $conta2];

```

02.1 - Iterando com o FOR
```
for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
```

02.2 - Iterando com o FOREACH
```
foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}
```


03 - Subrotinas

```
function soma($numero1, $numero2)
{
    echo($numero1 + $numero2);
}

exibirSoma(2, 2);
```

04 - Funções

```
function soma($numero1, $numero2)
{
    return $numero1 + $numero2;
}

$resultado = soma(2, 2);
```