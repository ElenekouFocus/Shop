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
    <h1 class="text-danger">Ajouter un client</h1>
    <form action="http://localhost/boutique/traitements/client_traitement.php" class="form-control" method="POST">
        <label for=""> Entrer le nom</label>
        <input  class="form-control" type="text" name="nom" placeholder="nom"><br>
        <label for="">Entrer le prenom</label>
        <input class="form-control" type="text" name="prenom" placeholder="prenom"><br>
        <label for="">Entrer le contact</label>
        <input class="form-control" type="text" name="contact" placeholder="contact"><br>
        <input class="form-control" type="submit" name="submitform">
    </form>     
</body>
</html>






















