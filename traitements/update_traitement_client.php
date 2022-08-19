<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
    <?php include("../menu.php"); ?>
    <h1>Modifier le client</h1>
</head>
<?php 
    
    $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
    //enregistrement dans la base de données
    if (isset($_POST["id"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["contact"])){
        $id=$_POST["id"];
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $contact=$_POST["contact"];
        $dbUpdateState= $db->prepare("UPDATE client SET id=:id,nom=:nom,prenom=:prenom,contact=:contact WHERE id=:id");
        $dbUpdateState->execute([
            "id" => $id,
            "nom" => $nom,
            "prenom" => $prenom,
            "contact" => $contact,
        ]);
        header("location: http://localhost/boutique/show_client.php");
    }else{
        header("location:http://localhost/boutique/show_client.php") ;
    }
    //fin de l'enregistrement

?>