<?php
    $db = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8",
        "root", 
        ""
    );
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $dbGetState = $db->prepare("select * from client_produit where id_client=:id");
        $dbGetState->execute(["id" => $id]);
        $commande = $dbGetState->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Modifier une commande</title>
    <?php include("../menu.php"); ?>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <form action="../traitements/update_traitement_commande.php" method="POST">
                    
                    <div class="form-group">
                        <label for="">Client</label>
                        <input type="text" name="id_client" class="form-control" value="<?php echo $commande["id_client"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Produit</label>
                        <input type="text" class="form-control" name="id_produit"  value="<?php echo $commande["id_produit"] ?>">

                    </div>
                    <br>
                    <div class="form-group">
                        <input class="btn btn-primary"type="submit">
                    </div>
                </form>
            </div>
        </section>
    </main>
    
</body>
</html>