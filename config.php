<?php

    $dsn = "mysql:dbname=controle_usuarios;host=localhost;port=3308";
    $dbUser = "root";
    $dbPassword = "";

    try{
        $pdo = new PDO($dsn, $dbUser, $dbPassword);
        
    }catch(PDOException $e){
        echo "Falhou a conexão: ".$e->getMessage();
    }
?>