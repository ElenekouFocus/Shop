<?php
 if (isset($_POST['submitform'])){
    if (isset($_POST['nom']) and isset($_POST['prixRevient']) and isset($_POST['prixVente']) and isset($_POST['nombreStock']) and isset($_POST['id_categorie']) ){
        $nom=$_POST['nom'];
        $prixRevient=$_POST['prixRevient'];
        $prixVente=$_POST['prixVente'];
        $nombreStock=$_POST['nombreStock'];
        $id_categorie=$_POST['id_categorie'];
        $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
        $state = $db -> prepare("INSERT INTO produit (nom,prixRevient,prixVente,nombreStock,id_categorie) VALUES (:nom,:prixRevient,:prixVente,:nombreStock,:id_categorie)");
        $state -> execute([
            "nom"=>$nom,
            "prixRevient"=>$prixRevient,
            "prixVente"=>$prixVente,
            "nombreStock"=>$nombreStock,
            "id_categorie" => $id_categorie        
        ]);
        header ('location:../show_produit.php');
    }
}else{
    header('location:create/create_produit.php');
} 
?> 