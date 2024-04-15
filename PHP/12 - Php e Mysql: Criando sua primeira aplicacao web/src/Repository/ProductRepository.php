<?php

class ProductRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getProducts()
    {
        $statement = $this->connection->query("SELECT * FROM produtos ORDER BY preco");
        return $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
    }

    public function getProductsById($id)
    {
        $statement = $this->connection->prepare("SELECT * FROM produtos WHERE id = :id");
        $statement->bindParam(":id", $id);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
    }

    public function getProductsByType($type)
    {
        $statement = $this->connection->prepare("SELECT * FROM produtos WHERE tipo = :tipo ORDER BY preco");
        $statement->bindParam(":tipo", $type);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
    }

    public function saveProduct(Product $product)
    {
        try {
            $nome = $product->getNome();
            $tipo = $product->getTipo();
            $descricao = $product->getDescricao();
            $preco = $product->getPreco();
            $imagem = $product->getImagem();

            $statement = $this->connection->prepare("INSERT INTO produtos (nome, tipo, descricao, preco, imagem) VALUES (:nome, :tipo, :descricao, :preco, :imagem)");
            $statement->bindParam(":nome", $nome);
            $statement->bindParam(":tipo", $tipo);
            $statement->bindParam(":descricao", $descricao);
            $statement->bindParam(":preco", $preco);
            $statement->bindParam(":imagem", $imagem);

            $statement->execute();
        } catch (PDOException $e) {
            echo $e;
        }

    }

    public function deleteProduct($id)
    {
        $statement = $this->connection->prepare("DELETE FROM produtos WHERE id = :id");
        $statement->bindParam(":id", $id);

        return $statement->execute();
    }

    public function updateProduct(Product $product)
    {
        $statement = $this->connection->prepare("UPDATE produtos SET tipo = :tipo, nome = :nome, descricao = :descricao, imagem = :imagem, preco = :preco WHERE id = :id");
        $id = $product->getId();
        $tipo = $product->getTipo();
        $nome = $product->getNome();
        $preco = $product->getPreco();
        $imagem = $product->getImagem();
        $descricao = $product->getDescricao();

        $statement->bindParam(":id", $id);
        $statement->bindParam(":tipo", $tipo);
        $statement->bindParam(":nome", $nome);
        $statement->bindParam(":preco", $preco);
        $statement->bindParam(":imagem", $imagem);
        $statement->bindParam(":descricao", $descricao);

        return $statement->execute();
    }
}