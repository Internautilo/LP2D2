<?php
    class ContaBancaria{
        private $titular;
        private $numeroConta;
        private $saldo;

        function __construct($titular, $numeroConta)
        {
            $this->titular = $titular;
            $this->numeroConta = $numeroConta;
            
            $this->saldo = rand(-500, 2000);
        }

        function get_titular()
        {
            return $this->titular;
        }
        function get_numeroConta()
        {
            return $this->numeroConta;
        }
        function get_saldo()
        {
            return $this->saldo;
        }

        function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }



        function apresentar()
        {
            echo "Bem vindo, $this->titular.<br>";
            echo "Saldo na conta: $this->saldo";
        }

        function sacar($valor)
        {
            if($valor > $this->saldo){
                return -1;
            } else {
                $this->saldo -= $valor;
            }
        }
        function depositar($valor)
        {
            $this->saldo += $valor;
        }
    }
?>