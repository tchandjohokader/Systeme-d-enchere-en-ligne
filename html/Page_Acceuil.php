<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Page_Acceuil.css">
    <title>Document</title>
</head>
<body>
    

    <div class="menu">
        <nav>
             <ul class="nav">
                <img src="../ressource/logo/logo.jpg" height="5cm" width="5cm">
                 <li class="navl"><a href="../html/Page_Acceuil.php"style="color: red;">Accueil</a></li>
                 <li class="navl"><a href="../html/Voir_Produit.html">Voir produits</a></li>
                 <li class="navl"><a href="../html/Vente_encours.php">Vente en cours</a></li>
                 <li class="navl"><a href="../php/add.php">Vendre</a></li>
                 <input class="recherche" type="text" placeholder="Recherche...">
                 <?php
                            if(isset($_SESSION['login'])){
                        ?>
                        <li class="navl"><a href="deconnecter.php">Se déconnecter</a> </li>
                        <?php }else{?>
                 <li class="navl"><a href="../php/connexion_form.php">Se connecter</a> </li>
                 <?php }?>  
             </ul>
             <img  class="imgnav" src="../ressource/Image_PA/haut.jpg" alt="#" width="100%" height="500%">
        </nav>  
    </div>      

    <h1 id="categories">LES CATEGORIES</h1>
    <div class="L1cat">

     <div id="AMEUBLEMENT" >
        <div><a href="file:///C:/Users/souag/Desktop/App2/Ameublement/Index.html"><img src="../ressource/Image_PA/meubles.jpg" alt="#" height="153cm" width="189cm"></a></div>
        <h4><a href="file:///C:/Users/souag/Desktop/App2/Ameublement/Index.html">AMEUBLEMENT</a></h4>
     </div>

     <div id="AMEUBLEMENT" >
        <div><img src="../ressource/Image_PA/art.jpg" alt="#" height="153cm" width="189cm"></div>
        <h4>ARTS ET DECORATIONS</h4>
     </div>

     <div id="AMEUBLEMENT" >
        <div><img src="../ressource/Image_PA/bijoux.jpg" alt="#" height="153cm" width="189cm"></div>
        <h4>MODE ET BIJOUX</h4>
     </div>

     <div id="AMEUBLEMENT" >
        <div><img src="../ressource/Image_PA/chaussures.jpg" alt="#" height="153cm" width="189cm"></div>
        <h4>CHAUSSURES</h4>
     </div>

     <div id="AMEUBLEMENT" >
        <div><img src="../ressource/Image_PA/montre.jpg" alt="#" height="153cm" width="189cm"></div>
        <h4>HORLOGES</h4>
     </div>
    
     <div id="AMEUBLEMENT" >
        <div><img src="../ressource/Image_PA/musique.jpg" alt="#" height="153cm" width="189cm"></div>
        <h4>MUSIQUE</h4>
     </div>
    
    </div>

    <div class="L2cat">

        <div id="AMEUBLEMENT" >
           <div><img src="../ressource/Image_PA/collection.jpg" alt="#" height="153cm" width="189cm"></div>
           <h4>COLLECTIONS</h4>
        </div>
   
        <div id="AMEUBLEMENT" >
           <div><img src="../ressource/Image_PA/accessoire table.jpg" alt="#" height="153cm" width="189cm"></div>
           <h4>ACCESSOIRES DE TABLE</h4>
        </div>
   
        <div id="AMEUBLEMENT" >
           <div><img src="../ressource/Image_PA/livre.jpg" alt="#" height="153cm" width="189cm"></div>
           <h4>LIVRE</h4>
        </div>
   
        <div id="AMEUBLEMENT" >
           <div><img src="../ressource/Image_PA/jeu.jpg" alt="#" height="153cm" width="189cm"></div>
           <h4>JEU</h4>
        </div>
   
        <div id="AMEUBLEMENT" >
           <div><img src="../ressource/Image_PA/téléphone.jpg" alt="#" height="153cm" width="189cm"></div>
           <h4>TELEPHONES</h4>
        </div>
       
        <div id="AMEUBLEMENT" >
           <div><img src="../ressource/Image_PA/voiture.jpg" alt="#" height="153cm" width="189cm"></div>
           <h4>VOITURES</h4>
        </div>
       
       </div>

       <div class="L3cat">

        <div id="AMEUBLEMENT" >
           <div><img src="../ressource/Image_PA/électromenagers.jpg" alt="#" height="153cm" width="189cm"></div>
           <h4>ELECTROMENAGERS</h4>
        </div>
      </div>

       <h1 id="produits">QUELQUES PRODUITS</h1>

       <div id="exempleprod">
        <div id="prod">
            <div><a href="#"><img src="../ressource/Image_PA/casque1.jpg" alt="#" height="170cm" width="189cm"></a></div>
            <p id="P">Casque de musique de qualité pour vibrer comme vous le désirez.
                        <b>25000FCFA</b>
            </p>
            <h4 id="Pr1"><a id="Pr1" href="#">PRERENCHERIR</a></h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/casque2.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Casque de musique de qualité pour vibrer comme vous le désirez.
                               <b>30000FCFA</b>
            </p>
            <h4 id="Pr1">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/airpods1.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Airpods de qualité pour vos moments de détentes et de relaxation.
                            <b>8000FCFA</b>
            </p>
            <h4 id="Pr1">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/jouet1.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Jouet en forme d'ourson pour le plaisr de vos enfants.
                            <b>7000FCFA</b>
            </p>
            <h4 id="Pr1">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/jouet2.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Jouet en forme d'ourson pour le plaisr de vos enfants.
                            <b>9000FCFA</b>
            </p>
            <h4 id="Pr1">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/meuble1.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Meuble confortable pour votre confort, votre plaisir et pour accueillir sans vous soucier vos invités.
                            <b>90000FCFA</b>
            </p>
            <h4 id="Pr">PRERENCHERIR</h4>
        </div>
      

       </div>

       <div id="exempleprod">
        <div id="prod">
            <div><img src="../ressource/Image_PA/meuble2.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Meuble confortable pour votre confort, votre plaisir et pour accueillir sans vous soucier vos invités.
                            <b>50000FCFA</b>
            </p>
            <h4 id="Pr">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/meuble3.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Meuble confortable pour votre confort, votre plaisir et pour accueillir sans vous soucier vos invités.
                            <b>50000FCFA</b>
            </p>
            <h4 id="Pr">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/meuble4.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Meuble confortable pour votre confort, votre plaisir et pour accueillir sans vous soucier vos invités.
                                    <b>50000FCFA</b>
            </p>
            <h4 id="Pr">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/meuble5.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Meuble confortable pour votre confort, votre plaisir et pour accueillir sans vous soucier vos invités.
                               <b>10000FCFA</b>
            </p>
            <h4 id="Pr">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/meuble6.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Meuble confortable pour votre confort, votre plaisir et pour accueillir sans vous soucier vos invités.
                                 <b>50000FCFA</b>
            </p>
            <h4 id="Pr">PRERENCHERIR</h4>
        </div>

        <div id="prod">
            <div><img src="../ressource/Image_PA/meuble7.jpg" alt="#" height="170cm" width="189cm"></div>
            <p id="P">Meuble confortable pour votre confort, votre plaisir et pour accueillir sans vous soucier vos invités.
                                 <b>70000FCFA</b>
            </p>
            <h4 id="Pr">PRERENCHERIR</h4>
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
<script src="../js/effet.js"></script>
    
</body>
</html>