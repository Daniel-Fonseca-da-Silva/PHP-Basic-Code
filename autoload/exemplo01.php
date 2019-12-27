<?php

    function __autoload($nomeClasse)
    {
        //var_dump($nomeClasse);
        require_once("$nomeClasse.php"); // procura a classe no mesmo diretorio
    }
   
    $carro = new Torino();

    $carro->acelerar(80);

?>