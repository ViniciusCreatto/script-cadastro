<?php 
require_once('conexao.php');

for ($i=0; $i < 10000; $i++) { 
    
    // $variable_name = rand(0,100); Números aleatorio de 0 a 100
    $variable_name = "value";

    
    $sql = "INSERT INTO {name_table} (column_name) VALUES ($variable_name)";

    // var_dump($sql);
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount()) {
        echo 'Cadastrado efetuado com sucesso! <br>';
    }
}
