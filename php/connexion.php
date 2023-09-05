<?php
session_start();
include_once 'connection.php';

if(isset($_POST['valider'])){
    if(isset($_POST["email"]) and isset($_POST["pass"])){
        if(!empty($_POST["email"]) and !empty($_POST["pass"])){
            $email=$_POST["email"];
            $pass=$_POST["pass"];

            

            $query="select * from table_user where email_user=?";
            $prepare=$connect->prepare($query);
            $prepare->execute(array($email));
            $result=$prepare->fetch();
            $key_password='Motd&p@ss&';
            $encrypted_chaine=$result['pass_user'];
            $decrypted_chaine = openssl_decrypt($encrypted_chaine, "AES-128-ECB" ,$key_password);
            if( $pass == $decrypted_chaine ){
                $_SESSION['login']=$result['email_user'];
                $_SESSION['id_user']=$result['id_user'];
                $_SESSION['nom']=$result['id_user'];
                header("location: ../html/Page_Acceuil.php");
            }else{
                $message="Email ou mots de passe incorrect ".$encrypted_chaine."zzzzzz";
            }
        }else{
            $message="Veuillez remplir correctement les champs";
        }    
    }
}

