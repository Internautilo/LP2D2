<?php

class Retangulo{
    private $largura;
    private $altura;

    function __construct($largura, $altura)
    {
        if($largura <= 0){
            echo "não é permitido largura menor ou igual a zero";
        }else {
            $this->largura = $largura;
        }
        if($altura <= 0){
            echo "não é permitido altura menor ou igual a zero";
        }else {
            $this->altura = $altura;
        }
    }
    function calcula_area(){
        return $this->altura * $this->largura;
    }
    function calcula_perimetro(){
        return ($this->altura * 2) + ($this->largura * 2);
    }

}