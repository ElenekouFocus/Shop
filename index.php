<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Acceuil</title>
</head>
<?php
  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from produit");
  $state->execute();
  $produits=$state->fetchAll();
  $state=$db->prepare("select * from client");
  $state->execute();
  $clients=$state->fetchAll();
  $state=$db->prepare("select * from categorie");
  $state->execute();
  $categories=$state->fetchAll();
  $state=$db->prepare("select * from client_produit");
  $state->execute();
  $commandes=$state->fetchAll()
?>
<body>
    <?php include("menu.php");?>
    <center>
        <h1>Bienvenue dans notre fameuse boutique focus</h1><br>
        <main>
        <section>
            <div class="btn btn-outline-primary">
                <a href="show_produit.php">Voire les <?php echo count($produits)?>  produits</a>
            </div>
            <div class="btn btn-outline-primary">
            <a href="create/create_produit.php">Ajouter un produit</a>
            </div><br><br>
            <div class="btn btn-outline-primary">
                <a href="show_categorie.php">Voire les <?php echo count($categories) ?> categories</a>
            </div>
            <div class="btn btn-outline-primary">
                <a href="create/create_categorie.php">Ajouter une categorie</a>
            </div><br><br>
            <div class="btn btn-outline-primary">
                <a href="show_client.php">Voire liste des clients</a>
            </div>
            <div class="btn btn-outline-primary">
                <a href="create/create_client.php">Ajouter un client</a>
            </div><br><br>
            <div class="btn btn-outline-primary">
                <a href="show_commande.php">Voire liste des commandes</a>
            </div>
            <div class="btn btn-outline-primary">
                <a href="create/commande.php">Faire une commande</a>
            </div><br>
        </section>
    </main><br>
    <p class= "text-danger">Nous avons <?php echo count($produits)?> produits dans la boutique</p><br>
    <p>Notre boutique a <?php echo count($clients) ?> clients</p><br>
    <p class= "text-danger">Nous avons <?php echo count($categories) ?> categories de produits dans la boutique</p><br>
    <p>Nous avons <?php echo count($commandes) ?> commandes dans la boutique</p>
    </center>  
</body>
</html>