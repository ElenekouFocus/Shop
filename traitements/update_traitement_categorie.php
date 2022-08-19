<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
    <?php include("../menu.php"); ?>
    <h1>Modifier un produit</h1>
</head>
<?php    
    $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
    //enregistrement dans la base de données
    if (isset($_POST["id"]) and isset($_POST["libelle"])){
        $id=$_POST["id"];
        $libelle=$_POST["libelle"];
        $dbUpdateState= $db->prepare("UPDATE categorie SET id=:id,libelle=:libelle WHERE id=:id");
        $dbUpdateState->execute([
            "id" => $id,
            "libelle" => $libelle,
        ]);
        header("location: http://localhost/boutique/show_categorie.php");
    }else{
        header("location:http://localhost/boutique/show_categorie.php") ;
    }
    //fin de l'enregistrement

?>