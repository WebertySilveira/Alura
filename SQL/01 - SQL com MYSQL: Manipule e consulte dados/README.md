## Manipule e consulte dados


###
```
// Criando banco de dados
CREATE DATABASE nomeBanco;

// Apagando banco de dados
DROP DATABASE nomeBanco;

// Usar banco
USE nomeBanco;

// Criar tabela
CREATE TABLE cliente (
    CPF VARCHAR(11),
    NOME VARCHAR(100),
    IDADE SMALLINT,
    SEXO VARCHAR(1),
    LIMITE FLOAT,
    PRIMEIRA_COMPRA BIT(1)
)

// Apagando tabelas
DROP TABLE nomeTabela

// Inserir dados
INSERT INTO cliente
    (CPF, NOME, IDADE, SEXO, LIMITE, PRIMEIRA_COMPRA)
VALUES
    ('99999999999', 'nome cliente', 99, 'X', 999, 1)

// Alterando registros
UPDATE nomeBanco.nomeTabela
SET NOME = 'Nome Sobrenome'
WHERE CPF = '99999999999'

// Removendo registros
DELETE FROM nomeBanco.nomeTabela WHERE CPF = '99999999999'

// Adicionando chave primária
// Impede a inserção de um outro registro com o mesmo dado chave
ALTER TABLE nomeBanco.nomeTabela ADD PRIMARY KEY (CPF)

// Adicionar nova coluna
ALTER TABLE nomeBanco.nomeTabela ADD COLUMN (nomeNovaColuna TIPO)

// Consultar registros da tabela
// * -> Todas as colunas
SELECT coluna AS nomePersonalizado
FROM nomeBanco.nomeTabela
WHERE coluna = 'Valor x'
LIMIT numeroDeLinhas;

// Maior, menor e diferente
WHERE CAMPO = 99
WHERE CAMPO < 99
WHERE CAMPO > 99
WHERE CAMPO <= 99
WHERE CAMPO <> 99   #DIFERENTE
WHERE CAMPO BETWEEN 10.002 AND 10.003     #ENTRE DOIS VALORES
WHERE YEAR(CAMPO_DATA) = 1999;
WHERE YEAR(CAMPO_DATA) = 1999 AND CAMPO <= 99;  # COMPOSTO
```