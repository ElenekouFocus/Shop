<?php
  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from categorie");
  $state->execute();
  $categories=$state->fetchAll(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title></title>
    <?php include("../menu.php"); ?>
</head>
<body>
    <h1 class="text-danger">Ajouter un produit</h1>
    <form action="http://localhost/boutique/traitements/produit_traitement.php" class="form-control" method="POST">
        <label for=""> Entrer le produit</label>
        <input  class="form-control" type="text" name="nom" placeholder="nom"><br>
        <label for="">Entrer le prix de revient du produit</label>
        <input class="form-control" type="text" name="prixRevient" placeholder="prix de revient"><br>
        <label for="">Entrer le prix de vente</label>
        <input class="form-control" type="text" name="prixVente" placeholder="prix de vente"><br>
        <label for="">Entrer le nombre de stock</label>
        <input class="form-control" type="text" name="nombreStock" placeholder="nombre de stock"><br>
        <?php
            echo '<label for="">Choisir une categorie</label><br>';
                    
            echo '<select class="form-control" name="id_categorie" >';
                    
            foreach($categories as $keys => $categorie){
                    
             echo '<option value="'. $categorie["id"].'"> '.$categorie["libelle"].'</option>';
                        }
            echo "</select><br>";
            echo '<input class="form-control" type="submit" name="submitform">';
        ?>
    </form> 
    
</body>
</html>






















