## MANIPULANDO TEXTOS COM PHP

01 - Verificações
```
// Contém os seguintes caracteres na string
str_contains($nome, "Sobrenome");

// A string começa com o seguinte padrão
str_starts_with($url, "https")
 
// A string termina com o seguinte padrão
str_ends_with($url, ".br")

// Tamanho da string
mb_strlen($senha) < 8

// Pegar posição do caractere
strpos($email, "@");

// Quebrar string naquela posição
substr($email, 0, $posicaoArroba);

// Tornar maiúscula
strtoupper($usuario);

// Tornar minúscula
strtolower($usuario);

// Quebrando a string em pedaços
explode(' ', $nome);

// Adicionando caracteres na string
implode('<br>', $telefones);

// Removendo espaços antes e depois
trim($error, " ");

// Removendo espaços antes
ltrim($error, " ");

// Removendo espaços depois
rtrim($error, " ");
```
02 - HEREDOC e NOWDOC
```
// HEREDOC -> FIM 
// NOWDOC  -> 'FIM'
// Criando um delimitador com o <<<

$conteudo = <<<FIM
Título

    Conteúdo
    
    Rodapé
    {assinatura}
FIM;
```

03 - WEB

```
// adiciona barra invertida, fazendo o html não interpretar
<input type="text" name="<?= 
    addslashes($nome); 
?>"/>

// converter os caracteres para código
<input type="text" name="<?= 
    htmlentities($nome); 
?>"/>
```
04 - Substituir 

```
$texto = "Texto com qualquer poxa e caramba";


// Troca as strings pelo passado no replace
echo str_replace(["poxa", "caramba"], "***", $texto);

// Troca palavras por caracteres
echo strtr($texto, ['poxa' => 'p', "caramba" => 'c']);
```

05 - Regéx
```
// Verifica se a regéx 'casa' com um alvo
preg_match(
    '/(^\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/',
    $telefone,
    $verificacoes
);

// Substitui o alvo por um valor passado
preg_replace(
    '/(^\([0-9]{2}\)) 9?[0-9]{4} - [0-9]{4}$/',
    '(XX) \2',
    $telefone
);


```
