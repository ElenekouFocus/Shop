<?php
  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from produit");
  $state->execute();
  $produits=$state->fetchAll(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
    <?php include("menu.php"); ?>
    <h1>Listes des produits</h1>
</head>

<body class="container">
    <main>
        <section>
                <table class="table">
                        <thead>
                            <tr class="fw-bold">
                                <td>id</td>
                                <td>Nom du produit</td>
                                <td>Prix de revient</td>
                                <td>Prix de vente</td>
                                <td>Nombre de stock</td>
                                <td>Categorie</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($produits as $keys => $produit){
                            ?>
                                <tr>
                                    <td><?php echo $produit["id"]?></td>
                                    <td><?php echo $produit["nom"]?></td>
                                    <td><?php echo $produit["prixRevient"]?></td>
                                    <td><?php echo $produit["prixVente"]?></td>
                                    <td><?php echo $produit["nombreStock"]?></td>
                                    <td><?php echo $produit["id_categorie"]?></td>
                                    <td><a class="btn btn-warning" href="http://localhost/boutique/update/update_produit.php?id=<?php echo $produit["id"]?>">Modifier</a></td>
                                    <td><a class="btn btn-danger" href="http://localhost/boutique/Delete/delete_produit.php?id=<?php echo $produit["id"]?>">Supprimer</a></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                </table>
        </section>
    </main> 
</body>