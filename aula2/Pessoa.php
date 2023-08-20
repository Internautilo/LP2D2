<?php

class Pessoa{
    private $nome;
    private $idade;
    private $profissao;

    function __construct($nome, $idade, $profissao)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->profissao = $profissao;
    }
    function apresentar(){
        echo "Olá, meu nome é $this->nome, tenho $this->idade, e trabalho como $this->profissao.";
    }
}