<?php

function ola($texto, $periodo = "Bom Dia")
{
    echo "Olá! $texto $periodo <br/>";
}

echo ola(" php 7");
echo ola("", "Boa noite");
echo ola("Dimitri!", "Boa Tarde");
echo ola("Nikolai!", "");

?>