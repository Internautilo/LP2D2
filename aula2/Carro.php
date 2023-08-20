<?php

class Carro{

    private $marca;
    private $modelo;
    private $ano;

    function __construct($marca, $modelo, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        

        if($ano < 2000){
            echo "Não é permitido um carro anterior a 2000";
        }else {
        $this->ano = $ano;
        }
    }
    function set_marca($marca){
        $this->marca = $marca;
    }
    function set_modelo($modelo){
        $this->modelo = $modelo;
    }
    function set_ano($ano){
        if($ano < 2000){
            echo "Não é permitido um carro anterior a 2000";
        }else {
        $this->ano = $ano;
        }
    }
    function get_marca(){
        return $this->marca;
    }
    function get_modelo(){
        return $this->modelo;
    }
    function get_ano(){
        return $this->ano;
    }
}
