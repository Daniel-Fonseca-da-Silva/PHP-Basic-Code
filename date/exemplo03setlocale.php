<?php

    // setlocale — Define informações locais

    setlocale(LC_ALL, "pt_BR", "pt_BR.utf_8", "portuguese");

    /* 
    Funcao strftime
    -> Formata uma hora/data local de acordo com a configuração do idioma. 
    -> Nome do mês e dia da semana e outras strings respeitam o idioma corrente definido com a função setlocale() 
    */
    echo ucwords(strftime("hoje é %A do mês de %B do ano de %Y hora atual %H:%M:%S"));
?>