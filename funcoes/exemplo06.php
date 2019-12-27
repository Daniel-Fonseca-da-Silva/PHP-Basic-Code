<?php

    $pessoa = array
    (
        'nome' => 'Daniel',
        'idade' => 20
    );

    foreach($pessoa as &$value)
    {
        // gettype funcao que captura o tipo da variável 
        
        // Se o tipo for igual a um inteiro
        if(gettype($value) === 'integer') 
        
        $value +=6;

        echo $value. '<br/>';
    }

    print_r($pessoa);
?>