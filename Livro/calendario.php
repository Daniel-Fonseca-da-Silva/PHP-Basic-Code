<?php

// funcao isset — Verifica se a variável é definida
function linha($semana)
{
    echo "<tr>";

        for($i = 0; $i <= 6; $i++)
        {
            if(isset($semana[$i]))
                echo "<td>{$semana[$i]}</td>";
            else
                echo "<td></td>";
        }

    
    echo "</tr>";
}

// funcao count Conta os elementos de um array, ou propriedades em um objeto.
// funcao Adiciona um ou mais elementos no final de um array


function calendario()
{
    $dia = 1;
    $semana = array();

    while($dia <= 31)
    {
        array_push($semana, $dia);

        
        if(count($semana) == 7)
        {
            linha($semana);
            $semana = array();
        }
        $dia++;
    }

    linha($semana);

    
}

?>

<h1> <?php echo "Titulo dentro do H1"; ?> </h1>
<table border="1">
    <tr>
        <th>Dom</th>
        <th>Seg</th>
        <th>Terc</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </tr>

    <?php  calendario(); ?>


</table>

