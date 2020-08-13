<?php

$host = "mysql:host=localhost;dbname=desafiodh;port=3306";
$user = "root";
$pass = "Porquinho24";

try {
    $db = new PDO($host, $user, $pass);
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    // echo "Conexão bem sucedida!"."<br><br>";
} catch(PDOException $e) {
    // echo "Não foi possível realizar a conexão com o Banco de dados!"."<br><br>";
    var_dump($e);
    $e -> getMessage();
    exit;
}

?>