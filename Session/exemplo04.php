<?php

    session_id('a26099cbb64139908cf5aee474e5787');

    require_once("config.php");

    session_regenerate_id(); // Função que gera novamente id de sessão

    echo session_id(); 

    var_dump($_SESSION);
?>