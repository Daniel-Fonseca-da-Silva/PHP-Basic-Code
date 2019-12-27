<?php

    $a = 10;

    // Passagem por referencia
    function trocaValor(&$a)
    {
        $a = 60;

        return $a;
    }
    
    /*
    // Passagem por valor
    function trocaValor($b)
    {
        $b = 50;

        return $b;
    }
    */
    
    echo trocaValor($a);
    echo "<br/>";
    echo $a;
    
?>