<?php

// Conexao
$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "root", "123");

// Prepara Query
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

// Manda parametros
$id = 7;

// Unir os parametros
$stmt->bindParam(":ID", $id);

// Executa
$stmt->execute();

echo "Dados deletados!";

?>