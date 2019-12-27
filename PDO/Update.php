<?php

// Conexao
$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "root", "123");

// Prepara Query
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

// Manda parametros
$login = "Daniel";
$password = "123";
$id = 2;

// Unir os parametros
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

// Executa
$stmt->execute();

echo "Dados alterados OK!";

?>