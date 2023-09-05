<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=sgbd_app_2','root','');
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}

    
    //affecter les valeur entrer dans le formulaire
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $pass=$_POST['mot_de_passe'];
    $contact=$_POST['contact'];
    $key_password='Motd&p@ss&';
    $encrypted_chaine = openssl_encrypt($pass, "AES-128-ECB" ,$key_password);

    
    $query="INSERT INTO table_user(numero_user,pseudo_user,nom_user,prenom_user,email_user,pass_user) values (?,?,?,?,?,?)";
    $prepare2=$connection->prepare($query);
    $prepare2->execute(array($contact,$nom,$nom,$prenom,$email,$encrypted_chaine));
    header("location:../php/connexion_form.php");