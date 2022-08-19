<?php
    $db = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8",
        "root", 
        ""
    );
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $dbGetState = $db->prepare("select * from categorie where id=:id");
        $dbGetState->execute(["id" => $id]);
        $categorie = $dbGetState->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Modifier une categorie</title>
    <?php include("../menu.php"); ?>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <form action="../traitements/update_traitement_categorie.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $categorie["id"] ?>">
                    <div class="form-group">
                        <label for="">Libelle</label>
                        <input type="text" name="libelle" class="form-control" value="<?php echo $categorie["libelle"] ?>">
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