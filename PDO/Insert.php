<?php

// Conexao
$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "root", "123");

// Prepara Query
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

// Manda parametros
$login = "Mariana";
$password = "123";

// Unir os parametros
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

// Executa
$stmt->execute();

echo "Inserido OK!";

?>