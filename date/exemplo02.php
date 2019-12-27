<?php

    // Obten o  timestamp
    // strtotime converte
    //echo strtotime("2001-09-11");
    $ts = strtotime("+1 day, +2 hour, +1 minute");

    echo date($ts); // Gera o timestamp

    echo("<br/><br/>");

    echo date("l d/m/Y H:i:s", $ts);

?>