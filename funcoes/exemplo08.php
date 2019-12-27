<?php

// Converte INT para string
function soma(int ...$valores):string
{
    // array_sum funcao de soma valores
    return array_sum($valores);
}

echo var_dump(soma(2, 2));

echo "<br/>";

echo var_dump(soma(1.5, 3.2));
?>