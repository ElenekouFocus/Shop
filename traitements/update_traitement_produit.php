<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
    <?php include("../menu.php"); ?>
    <h1>Modifier le produit</h1>
</head>
<?php 
    
    $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
    //enregistrement dans la base de données
    if (isset($_POST["id"]) and isset($_POST["nom"]) and isset($_POST["prixRevient"]) 
    and isset($_POST["prixVente"]) and isset($_POST["nombreStock"]) and isset($_POST["id_categorie"])){
        $id=$_POST["id"];
        $nom=$_POST["nom"];
        $prixRevient=$_POST["prixRevient"];
        $prixVente=$_POST["prixVente"];
        $nombreStock=$_POST["nombreStock"];
        $id_categorie=$_POST["id_categorie"];
        $dbUpdateState= $db->prepare("UPDATE produit SET id=:id,nom=:nom,
        prixRevient=:prixRevient,prixVente=:prixVente,nombreStock=:nombreStock,id_categorie=:id_categorie WHERE id=:id");
        $dbUpdateState->execute([
            "id" => $id,
            "nom" => $nom,
            "prixRevient" => $prixRevient,
            "prixVente" => $prixVente,
            "nombreStock"=>$nombreStock,
            "id_categorie"=>$id_categorie
        ]);
        header("location: http://localhost/boutique/show_produit.php");
    }else{
        header("location:http://localhost/boutique/show_produit.php") ;
    }
    //fin de l'enregistrement

?>