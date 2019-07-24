<?

$json = '[{"nome":"Nikolai","idade":"26"},{"nome":"Julian","idade":"30"}]';

$data = json_decode($json, true);// Converte formato JSON para ARRAY

var_dump($data);

?>