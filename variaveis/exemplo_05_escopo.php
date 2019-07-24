<?php

  $nome = "Daniel";

  function teste() // funcao
  {
    global $nome; // desbloqueia o escopo da variavel
    echo $nome . "</br>";
  }

  function teste2() // funcao
  {
    $nome = "Joao"; // variavel com escopo local
    echo $nome." agora no teste2";
  }

  teste(); // invoca a funcao
  teste2(); // invoca a funcao
?>
