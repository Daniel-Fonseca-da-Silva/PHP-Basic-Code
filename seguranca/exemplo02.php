<?php

    $id = (isset($_GET["id"]))?$_GET["i"]:1;

    $conn = mysqli_connect("mysql:dbname=dbphp7; host=127.0.0.1", "root", "123");

    $sql = "SELECT * FROM tb_usuarios WHERE idusuarios = $id";

    $exec = mysqli_query($conn, $sql);

    while($resultado = mysqli_fetch_object($exec))
    {
        echo $resultado->desnome . "<br>";
    }

?>