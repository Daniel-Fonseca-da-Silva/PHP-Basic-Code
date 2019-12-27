<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Daniel F S");
    $cad->setEmail("dnf@gmail.com");
    $cad->setSenha("123454321");

    $cad->registrarVenda();

?>