<?php

    // Incluindo a funcao do exemplo01

    //include "inc/exemplo01.php";
    require_once "inc/exemplo01.php";

    // Chamando funcao do exemplo01
    $resultado = somar(50, 25);

    echo("O resultado da soma ".$resultado);

?>