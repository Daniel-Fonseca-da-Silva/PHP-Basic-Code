<?php

    function incluirClasses($nomeClasse)
    {
        
        if (file_exists($nomeClasse. ".php") === true)
        {
            require_once($nomeClasse. ".php");
        }
        
    }
    // SPL(starnd php library)
    spl_autoload_register("incluirClasses");
    spl_autoload_register(function($nomeClasse){

        if (file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php") === true)
        {
            require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasse. ".php");
        }
    });

    $carro = new Torino();

    $carro->acelerar(80);

?>