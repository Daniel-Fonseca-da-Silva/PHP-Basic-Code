<?php

    $condicao = true;

    while($condicao)
    {
        // rand funcao que sorteia numero aleatorio
        $numero = rand(1, 20);

        if($numero === 5)
        {
            echo("Cinco!!");
            $condicao = false;
        }

        echo $numero . " ";

        
    }

?>