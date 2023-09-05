<?php
try{
    $connection = new PDO('mysql:host=localhost;dbname=db_e_commerce','root','LacinaKone1122');
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}


if(isset($_GET['valider'])){
    if(isset($_GET['login']) and isset($_GET['nom']) and isset($_GET['prenom']) and isset($_GET['email']) and isset($_GET['pass']) and isset($_GET['confirm_pass'])){
        if(!empty($_GET['login']) and !empty($_GET['nom']) and !empty($_GET['prenom']) and !empty($_GET['email']) and !empty($_GET['pass']) and !empty($_GET['confirm_pass'])){
    
            //affecter les valeur entrer dans le formulaire
            $login=$_GET['login'];
            $nom=$_GET['nom'];
            $prenom=$_GET['prenom'];
            $email=$_GET['email'];
            $pass=$_GET['pass'];
            $confirm_pass=$_GET['confirm_pass'];
    
            //ferication concordence du mot de passe
            if($pass==$confirm_pass){
    
                //verifier si le mot de passe ou l'email existe dejà
                $query1="select * from user where email_user=? or pass_user=?";
                $prepare1=$connection->prepare($query1);
                $prepare1->execute(array($email,$pass));
                $result1=$prepare1->fetchAll();
                if(count($result1)>0){
                   $message="<h2>Email ou le mot de passe existe dejà</h2>";
                }else{
                    $query="INSERT INTO USER(login_user,nom_user,prenom_user,email_user,pass_user) values (?,?,?,?,?)";
                    $prepare2=$connection->prepare($query);
                    $prepare2->execute(array($login,$nom,$prenom,$email,$pass));
                    $message="<h2>Votre compte a été créer avec success cliquez sur connectez vous pour vous connectez</h2>";
                }
        }else{
           $message = "<h2>Les mot de passe ne sont pas identique</h2>";
        }
    
    }else{
        $message="Veuillez renseigez tous les champs";
    }
    }
}






