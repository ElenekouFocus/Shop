<?php
 if (isset($_POST['submitform'])){
    if (isset($_POST['id_client']) and isset($_POST['id_produit'])){
        $id_client=$_POST['id_client'];
        $id_produit=$_POST['id_produit'];
        $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
        $state = $db -> prepare("INSERT INTO client_produit (id_client,id_produit) VALUES (:id_client,:id_produit)");
        $state -> execute([
            "id_client"=>$id_client,
            "id_produit" =>$id_produit        
        ]);
        header ('location:../show_commande.php');
    }
}else{
    header('location:create/commande.php');
} 
?> 