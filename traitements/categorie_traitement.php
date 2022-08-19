<?php
 if (isset($_POST['submitform'])){
    if (isset($_POST['libelle'])){
        $libelle=$_POST['libelle'];
        $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
        $state = $db -> prepare("INSERT INTO categorie (libelle) VALUES (:libelle)");
        $state -> execute([
            "libelle"=> $libelle,           
        ]);
        header('location:../show_categorie.php');
    }
} else{
    header('location:../create_categorie.php');
} 
?> 