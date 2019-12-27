<?php

    function manipulaErro($code, $message, $file, $line)
    {
        echo json_encode(array(
            "code"=>$code,
            "message"=>$message,
            "line"=>$line,
            "file"=>$file
        ));
    }

    set_error_handler("manipulaErro");

    echo 100 / 0;

?>