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

    echo json_encode($pessoas);// json_encode gera um formato JSON
    

?>