<?php
session_start();
try{
    $connect= new PDO("mysql:host=localhost;dbname=sgbd_app_2","root","");
}catch(Exception $e){
    die("Erreur : ".$e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Vente_encours.css">
    <title>Document</title>
</head>
<body>
    
    <div class="menu">
        <nav>
            <ul class="nav">
                <li class="navl"><a href="../html/Page_Acceuil.php">Accueil</a></li>
                <li class="navl"><a href="../html/Voir_Produit.html">Voir produits</a></li>
                <li class="navl"><a href="../html/Vente_encours.php" style="color: red;">Vente en cours</a></li>
                <li class="navl"><a href="../php/add.php">Vendre</a></li>
                 <input class="recherche" type="text" placeholder="Recherche...">
                 <li class="navl"><a href="../php/connexion_form.php">Se connecter</a> </li>
             </ul>
             <img class="imgnav" src="../ressource/Vente_encours/haut.jpg" alt="#" width="100%" height="500%">
        </nav>  
    </div>     
    
    <h1>VENTE EN COURS</h1>
    <div id="vente">
        <?php
        $req="select *  from article";
        $prep=$connect->prepare($req);
        $prep->execute(array());
        $donne=$prep->fetchAll();
        foreach($donne as $result){
        ?>
        <div id="V1"> 
            <div><a href="#"><img src="../php/<?= $result["image_article"]; ?>" alt="#" height="265cm" width="220cm"></a></div>
            <div id="T">
                <p><?= $result["descrip_article"]; ?></p>
                <h4><a id="R" href="./encherir.php">RENCHERIR</a></h4>
                <?php $_SESSION["image"]=$result["image_article"];
        $_SESSION["prix"]=$result["prix"];
        $_SESSION["description"]=$result["descrip_article"];
        $_SESSION['id']=$result["id_article"];?>
            </div>

        </div>
        <?php } ?>

        <div id="V1"> 
            <div><img src="../ressource/Vente_encours/bijoux1.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V1"> 
            <div><img src="../ressource/Vente_encours/bijoux2.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

    </div>

    <div id="vente">
        <div id="V2"> 
            <div><img src="../ressource/Vente_encours/bijoux3.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V2"> 
            <div><img src="../ressource/Vente_encours/bijoux4.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V2"> 
            <div><img src="../ressource/Vente_encours/bijoux5.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

    </div>

    <div id="vente">
        <div id="V3"> 
            <div><img src="../ressource/Vente_encours/bijoux6.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V3"> 
            <div><img src="../ressource/Vente_encours/bijoux7.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V3"> 
            <div><img src="../ressource/Vente_encours/bijoux8.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

    </div>

    <div id="vente">
        <div id="V4"> 
            <div><img src="../ressource/Vente_encours/bijoux9.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V4"> 
            <div><img src="../ressource/Vente_encours/bijoux10.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V4"> 
            <div><img src="../ressource/Vente_encours/bijoux11.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Bijoux de qualité et de valeur pour vos sorties et cérémonies grandiose.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

    </div>

    <div id="vente">
        <div id="V5"> 
            <div><a href="#"><img src="../ressource/Vente_encours/casque1.jpg" alt="#" height="265cm" width="220cm"></a></div>
            <div id="T">
                <p>Casque de musique de qualité pour vibrer comme vous le désirez.</p>
                <h4><a id="R" href="#">RENCHERIR</a></h4>
            </div>
        </div>

        <div id="V5"> 
            <div><img src="../ressource/Vente_encours/chaussure2.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Chaussures class femmes pour vos sorties class et glamour.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

        <div id="V5"> 
            <div><img src="../ressource/Vente_encours/collection2.jpg" alt="#" height="265cm" width="220cm"></div>
            <div id="T">
                <p>Des collections rarent pour vous les amoureux d'objets rares.</p>
                <h4>RENCHERIR</h4>
            </div>
        </div>

    </div>


    <footer>  
        <div class="footh">
            <div class="services">
                <h3>Services</h3> 
                <ul class="S">
                    <li>Possibilité de vendre vos produits</li>
                    <li>Possibilité d'acheter nos produits</li>
                </ul>
           </div>
           <div class="propos"> 
               <h3>A Propos</h3> 
               <ul class="P">
                   <li>Lorem Ipsum is simply</li>
                   <li>Lorem Ipsum is simply</li>
               </ul>
           </div>   

        </div>
        <div class="footb">
            <h2>DDT Enchères</h2>
            <P class="text">Nous sommes une entreprise de vente aux enchères en ligne. Nous mettons à votre disposition des produits de qualité. Bon shopping à vous et que le meilleur gagne. </P>
            <p class="copyright">DDT Enchères © </p>

        </div>    
            
    </footer>
    <script src="../js/effet2.js"></script>
</body>
</html>