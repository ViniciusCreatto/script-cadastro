<?php

$host = "host_name"; 
$user = "user_name"; 
$password = "pass"; 
$dbname = "db_name"; 

try {
    $conn = new PDO('mysql:host='. $host. ';dbname='. "$dbname", $user, $password);
} catch (PDOException $error) {
    echo "Erro: Conexão ao banco de dados não realizada. Erro gerado:". $error->getMessage();
}