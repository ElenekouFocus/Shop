<?php
if (isset($_GET['id'])){
        $id_categorie=$_GET['id'];
        $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
        $state = $db -> prepare("DELETE from categorie where id=:id");
        $state->execute([
            "id"=>$id_categorie
        ]   
        );
        header('location:../show_categorie.php');
    }else{
        header('location:../show_categorie.php');
    }

?>