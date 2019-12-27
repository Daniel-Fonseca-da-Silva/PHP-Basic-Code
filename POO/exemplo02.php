<?php

    class Carro{

        // Atributos
        private $modelo;
        private $motor;
        private $ano;

        // Metodos acessadores 
        public function getModelo()
        {
            return $this->modelo;
        }

        public function getMotor():float
        {
            return $this->motor;
        }

        public function getAno():int
        {
            return $this->ano;
        }

         // Metodos modificadores
        public function setModelo($modelo)
        {
            $this->modelo = $modelo;
        }

        public function setMotor($motor)
        {
            $this->motor = $motor;
        }

        public function setAno($ano)
        {
            $this->ano = $ano;
        }

        // toString

        public function exibir()
        {
            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );
        }// Fim exibir

    }// Fim da classe Carro

    // objeto instanciacao

    $opala = new Carro(); 
    $opala->setModelo("Opala SS");
    $opala->setmotor("8");
    $opala->setAno("1980");

    var_dump($opala->exibir());

?>
