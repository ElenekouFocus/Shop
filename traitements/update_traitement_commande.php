<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
    <?php include("../menu.php"); ?>
    <h1>Modifier la commande</h1>
</head>
<?php 
    
    $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
    //enregistrement dans la base de données
    if (isset($_POST["id_client"]) and isset($_POST["id_produit"])){
        $id_client=$_POST["id_client"];
        $id_produit=$_POST["id_produit"];
        $dbUpdateState= $db->prepare("UPDATE client_produit SET id_client=:id_client,id_produit=:id_produit WHERE id_client=:id_client");
        $dbUpdateState->execute([
            "id_client" => $id_client,
            "id_produit" => $id_produit,
        ]);
        header("location: http://localhost/boutique/show_commande.php");
    }else{
        header("location:http://localhost/boutique/show_commande.php") ;
    }
    //fin de l'enregistrement

?>