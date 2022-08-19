<?php
  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from client_produit");
  $state->execute();
  $commandes=$state->fetchAll(); 
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
    <h1>Listes des commandes</h1>
</head>
<body class="container">
    <main>
        <section>
                <table class="table">
                        <thead>
                            <tr class="fw-bold">
                                <td>Clients</td>                               
                                <td>Produits</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($commandes as $keys => $commande){
                            ?>
                                <tr>
                                    <td><?php echo $commande["id_client"]?></td>
                                    <td><?php echo $commande["id_produit"]?></td>
                                    <td><a class="btn btn-warning" href="http://localhost/boutique/update/update_commande.php?id=<?php echo $commande["id_client"]?>">Modifier</a></td>
                                    <td><a class="btn btn-danger" href="http://localhost/boutique/traitements/delete_commande.php?id=<?php echo $commande["id_client"]?>">Supprimer</a></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                </table>
        </section>
    </main> 
</body>