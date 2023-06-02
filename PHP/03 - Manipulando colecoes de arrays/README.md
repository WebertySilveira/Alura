## MANIPULANDO COLEÇÕES DE ARRAYS

01 - Ordenando
```
// Pegando a quantidade de dados dentro de um array
count($array);

// Manipulando um array ordenado (Ordena por referência)
$listaOrdenada = $array;
sort($listaOrdenada);

// Mantendo as chaves
asort($listaOrdenada);

// Ordem inversa
rsort($listaOrdenada);

// Mantendo as chaves
arsort($listaOrdenada);

// Ordena pelas chaves
ksort($listaOrdenada);

// Ordem inversa
krsort($listaOrdenada);
```

02 - Verificações

```
// Pega o tipo daquela variável para verificar se é um array
gettype($notas) === 'array';

// Verifica se é um array
is_array($notas);

// PHP 8.1 - Verifica se é uma lista (Para realizar um for por exemplo)
array_is_list($notas);

// Se a chave existe no array
array_key_exists("X", $notas);

// Existe e não é nulo
isset($notas["X"])

// Valor existe no array
in_array(10, $notas);

// Encontrando a chave a partir do valor | Se não encontrar retorna FALSE
array_search(10, $notas)

// Pegando apenas o valor diferente no array
array_diff()
array_diff_key()

// Pegando apenas as chaves
array_keys()

// Pegando apenas os valores
array_values()

// Utilizando arrays como chave e valor
array_combine($chaves, $valores)

// Invertendo ordem para Valor => chave
array_flip()

```

03 - Mesclando arrays

```
// Unindo dois arrays (Não preserva as chaves | Precisam ter o mesmo tamanho)
array_merge()

// Juntando e preservando as chaves
$array3 = $array1 + array2;

// PHP7.4 - Desempacotando os arrays 
$array3 = [...$array1, "Adicionar outro valor", ...$array2];
```

04 - Ordena um array com base em uma função criada pelo usuário

```
function ordenaNotas(array $nota1, array $nota2) {
    if ($nota1['nota'] > $nota2['nota']){
        return -1;
    }
    
    if ($nota2['nota'] > $nota1['nota']){
        return 1;
    }
    
    return 0;
}

// Passando a função como parâmetro
usort($notas, 'ordenaNotas');

//Substituindo por um operador
function ordenaNotas(array $nota1, array $nota2) {
    return $nota1['nota'] <=> $nota2['nota'];
}

usort($notas, 'ordenaNotas');
```

06 - Argumentos variáveis

```
ordenaNotas(...[1,2,3]);
function ordenaNotas(int $a, int $b, int $c) {}
```

07 - Adicionar e Remover elementos

```
$array = [...$nota1, "Nome", ...$nota2]
array_push($array, 'Nota1', 'nome', 'Nota2');

// Adicionando elemento ao final
$array[] = "Nota3";

// Adicionando elemento ao inicio
$array_unshift($array, "Nota0")

// Remove ultimo elemento
array_pop($array);
```

08 - Adicionar as chaves para vários valores
```
$dados = ['teste', 10, 24];
list($titulo, $nota, $idade) = $dados;

// Pode-se descrever assim
list('titulo' => $titulo, 'nota' => $nota, 'idade' => $idade) = $dados;

// PHP 7.1 -> [x,y,z] = $dados
```

09 - Criar variáveis com base nas chaves
```
$dados = [
    $nome => 'teste',
    $nota => 'nota',
    $idade => 'idade'
];

extract($dados);
```

10 - Cria um array com base nas variáveis
```
compact(
    'teste',
    'nota',
    'idade'
);
```

11 - Filter, map e reduce
```

```

12 - Função anônima
```

```
