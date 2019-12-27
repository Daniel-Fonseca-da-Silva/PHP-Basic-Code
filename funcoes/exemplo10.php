<?php

    // callback usada para processos longos
    function test($callback)
    // Processo lento
    {
        $callback();
    }

    // Funcao anonima
    test(function(){
        echo "Terminou";
    });

?>