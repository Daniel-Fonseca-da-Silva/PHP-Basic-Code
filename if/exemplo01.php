<?php

    $suaIdade = 26;
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 50;

    if($suaIdade < $idadeMaior)
    {
        echo("Criança");
    }
    else if($suaIdade >= $idadeMaior && $suaIdade <= 25)
    {
        echo("Adolescente");
    }
    else if($suaIdade >= 25 && $suaIdade <= $idadeMelhor )
    {
        echo("Adulto");
    }
    else
    {
        echo("Idoso");
    }

    echo("</br>");

    // operador tenario
    echo($suaIdade < $idadeMaior)?"menor de idade detectado":"Maior de idade detectado";
?>