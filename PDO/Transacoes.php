<?php

// Conexao
$conn = new PDO("mysql:dbname=dbphp7; host=127.0.0.1", "root", "123");

//Transacao
$conn->beginTransaction();

// Prepara Query
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

// Manda parametros
$id = 8;


// Executa
$stmt->execute(array($id));

// Cancela
//$conn->rollBack();

// Confirmar

// $conn->commit();

echo "Dados deletados!";

?>