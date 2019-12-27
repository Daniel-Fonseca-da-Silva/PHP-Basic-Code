<?php

    spl_autoload_register(function($nameClass){

        var_dump($nameClass);

        $dirClass = "class";
        $filename = str_replace ("\\", "/", $dirClass . 
        DIRECTORY_SEPARATOR . $nameClass . ".php");

        // Em php sem passa nada para if já fica explicito
        // que se espera que seja verdade 
        if (file_exists($filename))
        {
            require_once($filename);
        }

    });

?>