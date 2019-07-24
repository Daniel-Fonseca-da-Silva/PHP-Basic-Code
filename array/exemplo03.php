<?php

    $pessoas = array();

    array_push($pessoas, array(

        'nome' => 'Nikolai',
        'idade' => '26'

    ));

    array_push($pessoas, array(

        'nome' => 'Julian',
        'idade' => '30'
        
    ));

    print_r($pessoas);

    echo('<br/><br/>'. "------------------------------------------------------------------------------" . '<br/><br/>');
    
    print_r($pessoas[0]['nome']);

?>