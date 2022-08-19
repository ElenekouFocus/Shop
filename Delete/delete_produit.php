<?php
if (isset($_GET['id'])){
        $id_produit=$_GET['id'];
        $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
        $state = $db -> prepare("DELETE from produit where id=:id_categorie;DELETE from categorie where id=:id_categorie;");
        $state->execute([
            "id_categorie"=>$id_produit
        ]   
        );
        header('location:../show_produit.php');
    }

?>