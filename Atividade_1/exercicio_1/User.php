<?php 

    class User{
        private $nome;
        private $idade;
        private $profissao;
        private $saldo;

        function __construct($nome, $idade, $profissao)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->profissao = $profissao;

            $this->saldo = rand(-500, 1000);
        }
    
        function get_nome()
        {
            return $this->nome;
        }
        function get_idade()
        {
            return $this->idade;
        }
        function get_profissao()
        {
            return $this->profissao;
        }
        function get_saldo()
        {
            return $this->saldo;
        }
        function apresentar()
        {   
            $situacao = "";
            if($this->saldo < 0){
                $situacao = "negativado";
            }else {
                $situacao = "";
            }
            echo "Olá, meu nome é $this->nome, tenho $this->idade anos, e trabalho como $this->profissao.<br><br/>";
            echo "Saldo na conta bancária $situacao: R$ $this->saldo";
        }

    }  

    

?>