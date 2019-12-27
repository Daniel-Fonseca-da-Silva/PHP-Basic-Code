<?php

    class Pessoa{
        
        // Atributos(variaveis)
        public $nome; 

        // Metodos(funcoes)

        public function falar()
        {
            return "O meu nome e ".$this->nome;
        }

    }

    
    // Instanciao de um objeto do tipo Pessoa em PHP
    $nikolai = new Pessoa();

    $nikolai->nome = "Nikolai Vlad"; // Atribui o valor ao objeto

    echo $nikolai->falar(); // Invoca o metodo falar

?>