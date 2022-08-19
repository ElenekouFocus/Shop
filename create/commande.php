<?php
  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from client");
  $state->execute();
  $clients=$state->fetchAll(); 

  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from produit");
  $state->execute();
  $produits=$state->fetchAll();

  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from client_produit");
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
    <h1 class="text-danger">Faites la commande</h1>
    <form action="http://localhost/boutique/traitements/commande_traitement.php" class="form-control" method="POST">
       
        <?php
            echo '<label for="">Choisir le client</label><br>';
                    
            echo '<select class="form-control" name="id_client" >';
                    
            foreach($clients as $keys => $client){
                    
             echo '<option value="'. $client["id"].'"> '.$client["nom"].'</option>';
                        }
            echo "</select><br>";
            echo '<label for="">Choisir le produit</label><br>';
                    
            echo '<select class="form-control" name="id_produit" >';
                    
            foreach($produits as $keys => $produit){
                    
             echo '<option value="'. $produit["id"].'"> '.$produit["nom"].'</option>';
                        }
            echo "</select><br>";
            echo '<input class="form-control" type="submit" name="submitform">';
        ?>
    </form> 
    
</body>
</html>






















