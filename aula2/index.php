<?php
    require_once "Carro.php";

    class Fruta{
        public $nome;
        public $cor;
        
        function __construct($nome, $cor){
            $this->nome = $nome;
            $this->cor = $cor;
        }

        function set_nome($nome){
            if($nome == "Jose"){
                $this->nome = "invalido";
            }else {
                $this->nome = $nome;
            }
        }
        function set_cor($cor){
            $this->cor = $cor;
        }
        function get_nome(){
            return $this->nome;
        }
        function get_cor(){
            return $this->cor;
        }
    }

    $maca = new Fruta("maca", "vermelha");
    $banana = new Fruta("banana", "amarela");
    $mamao = new Fruta("mamao", "laranja");

    $carro1 = new Carro("Toyota" , "Supra", 2012);
    echo "<br> Carro 1 - marca = " . $carro1->get_marca() . 
        "<br> modelo = " . $carro1->get_modelo() . 
        "<br> ano = ". $carro1->get_ano() . "<br><br>";
    $carro2 = new Carro("Subaru", "Impreza", 1999);
    echo "<br> Carro 2 - marca = " . $carro2->get_marca() . 
        "<br> modelo = " . $carro2->get_modelo() . 
        "<br> ano = ". $carro2->get_ano() . "<br><br>";

    $retangulo = new Retangulo(10,12);
    echo "Área do Retangulo = ".$retangulo->calcula_area();
    echo "<br>Perimetro do Retangulo = ". $retangulo->calcula_perimetro() . "<br><br>";

    $pessoa = new Pessoa("Yuri", 19, "Administrativo");
    $pessoa->apresentar();

    echo "<br>".$maca->get_nome();
    echo "<br>".$maca->get_cor();
    echo "<br>".$banana->get_nome();
    echo "<br>".$banana->get_cor();
    echo "<br>".$mamao->get_nome();
    echo "<br>".$mamao->get_cor();
?>