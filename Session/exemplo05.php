<?php

    require_once("config.php");

    echo session_save_path(); // Mostra local de salvamento da sessão

    echo "<br>";

    var_dump(session_status());

?>