<?php
    $db = new PDO(
        "mysql:host=localhost;dbname=boutique;charset=utf8",
        "root", 
        ""
    );
    if(isset($_GET["id"])){
        $id=$_GET["id"];
        $dbGetState = $db->prepare("select * from client where id=:id");
        $dbGetState->execute(["id" => $id]);
        $client = $dbGetState->fetch();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Modifier un client</title>
    <?php include("../menu.php"); ?>
</head>
<body>
    <main>
        <section>
            <div class="container">
                <form action="../traitements/update_traitement_client.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $client["id"] ?>">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" class="form-control" value="<?php echo $client["nom"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom</label>
                        <input type="text" class="form-control" name="prenom"  value="<?php echo $client["prenom"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" class="form-control" name="contact"  value="<?php echo $client["contact"] ?>">
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