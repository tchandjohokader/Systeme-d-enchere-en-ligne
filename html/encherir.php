<?php session_start();
include_once "../php/connection.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="encherir.css">
</head>
<body>
<?php 
if(isset($_POST['envoyer'])){
    $prix = $_POST['prix'];
$sql = "update article set prix=? ,id_user=? where id_article=?";
$query = $connect->prepare($sql);
$query_add = $query->execute([$prix,$_SESSION['id_user'],$_SESSION['id']]);
$_SESSION["prix"]=$prix;

$sql1="select id_user from article";
$query1 = $connect->prepare($sql1);
$query1->execute(array());
$id=$query1->fetch();
}
?>
    <div class="container" id="pl">
        <div class="contain-user">
            
                <div class="user"><h5 style="color: black;"><?php if(isset($id)){ echo (string)$id['id_user'];} ?></h5></div>
                <div><div class="user1">Votre Numero pour cette enchere est : <?php echo $_SESSION['id_user'];?> </div>
            </div>
            <div class="user"><h5></h5></div>
        </div>
        <div class="contain-img">
            <div class="img1">
                <img src="../php/<?=$_SESSION["image"] ; ?>" alt="">
            </div>
            <h2>prix: <?php echo $_SESSION["prix"]?>FCFA</h2>
            <form action="./encherir.php" method="post">
                <input type="number" name="prix"  placeholder="Déposer votre enchère">
                <input type="submit" value="Enchérir" name="envoyer" id="envou">
            </form>
        </div>  
        <div class="description">
        <?php echo $_SESSION["description"]?>
        </div>
    </div>
    <section>
        <div class="grand">
            <div class="pousse">
                <i class="fa fa-check fa-5x" style="color: green;"></i>
            </div>
            <div class="text">
            <a href="../html/Voir_Produit.html">FELICITATTION</a>
            </div>
        </div>
        </section>
    <script src="../js/timer1.js"></script>
</body>
</html>