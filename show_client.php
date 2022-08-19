<?php
  $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
  $state=$db->prepare("select * from client");
  $state->execute();
  $clients=$state->fetchAll(); 
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
    <h1>Listes des clients</h1>
</head>
<body class="container">
    <main>
        <section>
                <table class="table">
                        <thead>
                            <tr class="fw-bold">
                                <td>id</td>
                                <td>Nom du client</td>
                                <td>Prenom du client</td>
                                <td>Contact du client</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($clients as $keys =>$client){
                            ?>
                                <tr>
                                    <td><?php echo $client["id"]?></td>
                                    <td><?php echo $client["nom"]?></td>
                                    <td><?php echo $client["prenom"]?></td>
                                    <td><?php echo $client["contact"]?></td>
                                    
                                    <td><a class="btn btn-warning" href="http://localhost/boutique/update/update_client.php?id=<?php echo $client["id"]?>">Modifier</a></td>
                                    <td><a class="btn btn-danger" href="http://localhost/boutique/Delete/delete_client.php?id=<?php echo $client["id"]?>">Supprimer</a></td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                </table>
        </section>
    </main> 
</body>