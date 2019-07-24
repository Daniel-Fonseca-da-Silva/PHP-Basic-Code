<?php

    require_once("config.php"); // Invocando a função do arquivo config.php

    session_unset($_SESSION); // Apaga a variável de sessão

    echo $_SESSION["Nome"];
    
    session_destroy() // Apaga e remove usuário
?>