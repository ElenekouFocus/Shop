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
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
    <?php include("menu.php"); ?>
    <h1>Listes des categories</h1>
</head>
<body class="container">
    <main>
        <section>
                <table class="table">
                        <thead>
                            <tr class="fw-bold">
                                <td>id</td>
                                <td>categorie</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($categories as $keys => $categorie){
                            ?>
                                <tr>
                                    <td><?php echo $categorie["id"]?></td>
                                    <td><?php echo $categorie["libelle"]?></td>
                                    <td><a class="btn btn-warning" href="http://localhost/boutique/update/update_categorie.php?id=<?php echo $categorie["id"]?>">Modifier</a></td>
                                    <td><a class="btn btn-danger" href="http://localhost/boutique/Delete/delete_categorie.php?id=<?php echo $categorie["id"]?>">Supprimer</a></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                </table>
        </section>
    </main> 