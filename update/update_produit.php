<?php
    $db = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8",
        "root", 
        ""
    );
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $dbGetState = $db->prepare("select * from produit where id=:id");
        $dbGetState->execute(["id" => $id]);
        $produit = $dbGetState->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Modifier un produit</title>
    <?php include("../menu.php"); ?>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <form action="../traitements/update_traitement_produit.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $produit["id"] ?>">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $produit["nom"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Prix de revient</label>
                        <input type="text" class="form-control" name="prixRevient" value="<?php echo $produit["prixRevient"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Prix de Vente</label>
                        <input type="text" class="form-control" name="prixVente"  value="<?php echo $produit["prixVente"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Nombre de Stock</label>
                        <input type="text" class="form-control" name="nombreStock"  value="<?php echo $produit["nombreStock"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Categorie</label>
                        <input type="text" class="form-control" name="id_categorie"  value="<?php echo $produit["id_categorie"] ?>">
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