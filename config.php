<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "sgbd_app_2";
$dsn = "mysql:host=$servername;dbname=$database";

try {
    $conn = new PDO($dsn,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Connexion echoué ".$e->getMessage();
}

