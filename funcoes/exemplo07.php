<?php

// Declaracao de tipos escalares
function soma(int ...$valores)
{
    // array_sum funcao de soma valores
    return array_sum($valores);
}

echo soma(2, 2);

echo "<br/>";

echo soma(25, 25);

echo "<br/>";

// ignora as fracoes 1+3 = 4
echo soma(1.5, 3.2);
?>