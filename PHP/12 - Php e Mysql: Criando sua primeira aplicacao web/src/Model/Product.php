<?php

require_once __DIR__ . "/../Connection.php";
require_once __DIR__ . "/../Repository/ProductRepository.php";

class Product
{
    public $id;
    public $tipo;
    public $nome;
    public $descricao;
    public $imagem;
    public $preco;

    private PDO $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function setProduct($id, $nome, $tipo, $descricao, $preco, $imagem)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->imagem = $imagem;
    }

    public function getProductsByType($type)
    {
        return (new ProductRepository($this->connection))->getProductsByType($type);
    }

    public function getProducts()
    {
        return (new ProductRepository($this->connection))->getProducts();
    }

    public function getProductsById($id)
    {
        $product = (new ProductRepository($this->connection))->getProductsById($id);
        return reset($product);
    }

    public function saveProduct(Product $product)
    {
        (new ProductRepository($this->connection))->saveProduct($product);
    }

    public function deleteProduct($id)
    {
        (new ProductRepository($this->connection))->deleteProduct($id);
    }

    public function updateProduct(Product $product)
    {
        (new ProductRepository($this->connection))->updateProduct($product);
    }

    public function getImagePath()
    {
        return "img/{$this->getImagem()}";
    }

    public function setImage($image)
    {
        $this->imagem = $image;
    }

    public function getFormatedPrice()
    {
        return "R$ " . number_format($this->getPreco(), 2);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getImagem()
    {
        return $this->imagem;
    }

    public function getPreco()
    {
        return $this->preco;
    }
}