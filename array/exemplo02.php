<?php

    // Arrays bidimensionais
    $carros [0][0] = "Chevrolet";
    $carros [0][1] = "Opala";
    $carros [0][2] = "Chevette";
    $carros [0][3] = "Impala";

    $carros [1][0] = "Ford";
    $carros [1][1] = "Landau";
    $carros [1][2] = "Fairlane";
    $carros [1][3] = "Torino";

    //echo $carros[0][3];

    print_r($carros[0][0]);
    echo('<br/>'. $carros[0][3] . '<br/>');

    echo end($carros[1]); //'echo end'  Exibe o último valor do array

?>