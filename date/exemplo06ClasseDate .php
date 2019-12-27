<?php

    // Variavel objeto
    $dt = new DateTime();

    $periodo = new DateInterval("P3D");

    echo $dt->format("d/m/Y H:i:s");

    // Metodo add adiciona uma data

    $dt->add($periodo);;

    echo "<br/><br/>";

    echo $dt->format("d/m/Y H:i:s");

?>