<?php
class Produto {

    private $nome;
    private $preco;

    function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->$preco = $preco;
    }

    




    public function getPreco()
    {
        return $this->preco;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
}