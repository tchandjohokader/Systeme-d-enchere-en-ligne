<?php
try{
    $connect= new PDO("mysql:host=localhost;dbname=sgbd_app_2","root","");
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}