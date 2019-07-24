<?php

  $frase = "A repetição é a mãe da rentenção.";

  $palavra = "repetição";

  // Encontra a posição da primeira ocorrência de uma string
  $query = strpos($frase, $palavra);

  echo($query."<br/>");

  // Retorna uma parte de uma string
  $texto = substr($frase, 0, $query);

  var_dump($texto);

  $texto2 = substr($frase, $query + strlen($palavra), strlen($frase));

  echo("<br/>");

  var_dump($texto2);

?>
