## CONSULTAS SQL


### FILTRANDO
```
// Caso o valor seja float, fica armazenado no banco com mais de duas casas decimais, deve ser consultado utilizando o BETWEEN

SELECT * FROM tabela WHERE valor BETWEEN 19.50 AND 19.51;

// Nega a condição no filtro
WHERE NOT(valor = "x")

// Verifica se está contido
WHERE valor IN ("X", "Y");

// Busca todos que contenham aquele valor no meio, início e final
WHERE valor LIKE "%x%";
WHERE valor LIKE "x%";
WHERE valor LIKE "%x";

// Retorna apenas as colunas com valores diferentes
SELECT DISTINCT coluna FROM tabela;

// Limita o número de linhas exibidas
SELECT * 
FROM tabela 
LIMIT 2;

// A partir da posição 2, pegar os 3 próximos
SELECT * 
FROM tabela 
LIMIT 2,3;

// Ordena por um campo determinado
SELECT * 
FROM tabela 
ORDER BY campo;

// Ascendente
ASC

// Decrescente
DESC

// Agrupa os valores numéricos por uma chave
SELECT campos 
ROM tabela 
GROUP BY campo;

// Condição para filtrar os resultados após um group by
SELECT campos 
FROM tabela 
GROUP BY campo 
HAVING condicao;

// Condições 
SELECT X,
CASE 
    WHEN CONDICAO THEN "1"
    WHEN CONDICAO THEN "2"
    WHEN CONDICAO THEN "3"
    ELSE "4"
END;
```

### JOINS
```
// INNER
SELECT A.NOME, B.HOBBY FROM 
TABELA_ESQUERDA A
INNER JOIN TABELA_DIREITA B
ON A.IDENTIFICADOR = B.IDENTIFICADOR;

// LEFT
SELECT A.NOME, B.HOBBY FROM 
TABELA_ESQUERDA A
LEFT JOIN TABELA_DIREITA B
ON A.IDENTIFICADOR = B.IDENTIFICADOR;

// RIGHT
SELECT A.NOME, B.HOBBY FROM 
TABELA_ESQUERDA A
RIGHT JOIN TABELA_DIREITA B
ON A.IDENTIFICADOR = B.IDENTIFICADOR;

// FULL
SELECT A.NOME, B.HOBBY FROM 
TABELA_ESQUERDA A
FULL JOIN TABELA_DIREITA B
ON A.IDENTIFICADOR = B.IDENTIFICADOR;

// Faz a junção de uma ou mais tabelas
// Mesmo numero de colunas
SELECT DISTINCT coluna FROM tabela
UNION
SELECT DISTINCT coluna FROM tabela

// Une listando os repetidos
UNION ALL

// Subconsultas
SELECT X,Y FROM tabela
<!-- WHERE Y IN (1,2,3)  -->
WHERE Y IN (SELECT Y FROM tabela2)

// View - uma tabela lógica, resultado de uma consulta
CREATE VIEW "VW_NOME" AS 
SELECT COLUNAS FROM Tabela;

// A consulta criada pode ser usada em outras, sem precisar recriar
SELECT COLUNAS FROM "VW_NOME" X WHERE X.VALOR >= 10;
```

### FUNÇÕES
```
// Concatena strings
CONCAT

// TIRA ESPAÇOS DA STRING
RTRIM
LTRIM
TRIM

// ALTERA CASE
LCASE == LOWER
UCASE == UPPER

// EXTRAI UMA SUBSTRING
SUBSTRING

// TAMANHO DA STRING
LENGTH

// Adiciona um intervalo sobre a data
ADDDATE
ADDTIME
DATE_ADD

// Retorna a data
CURRENT
CURRENT_TIMESTAMP
CURRENT_TIME
CURRENT_DATE
DAYNAME
DAY
MONTH
MONTH_DAY

// Retorna o intervalo entre duas datas
DATEDIFF

// OPERAÇÕES
AVG
SUM
SQRT

// Arredonda
ROUND


```
