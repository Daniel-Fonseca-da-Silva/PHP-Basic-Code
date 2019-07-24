<?php

    $diasDaSemana = date_default_timezone_set("America/Sao_Paulo");

    switch($diasDaSemana)
    {
        case 0:
        {
            echo("Domingo");
            break;
        }
        case 1:
        {
            echo("Segunda");
            break;
        }
        case 2:
        {
            echo("Terca");
            break;
        }
        case 3:
        {
            echo("Qaurta");
            break;
        }
        case 4:
        {
            echo("Quinta");
            break;
        }
        case 5:
        {
            echo("Sexta");
            break;
        }
        case 7:
        {
            echo("Sabado");
            break;
        }
        default:
        {
            echo("Data não válida");
        }
        
    }


?>