<?php
include_once 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_connexion.css">
</head>
<body style="background-color: rgb(255, 240, 240);">
    <div class="container">
        <form action="connexion_form.php" method="post">
            <h2>Connexion</h2>
            <div><?php if(isset($message)){ echo $message;}?></div>
            <input type="email" name="email" id="" placeholder="adress email">
            <input type="password" name="pass" id="" placeholder="mots de passe">
            <input type="submit" value="connecter vous" name="valider">
            <p>Vous n'avez pas de compte ? <a href="../html/Formulaire.html">inscrivez vous ici</a></p>
        </form>
    </div>
</body>
</html>