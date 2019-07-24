<?php

    function args()
    {
        $argumentos = func_get_args();

        return $argumentos;
    }

    var_dump(args("Bom Dia", 10));

?>