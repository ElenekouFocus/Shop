<?php
 if (isset($_POST['submitform'])){
    if (isset($_POST['nom']) and isset($_POST['prenom']) 
    and isset($_POST['contact'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $contact=$_POST['contact'];
        $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", ""); 
        $state = $db -> prepare("INSERT INTO client (nom,prenom,contact) VALUES (:nom,:prenom,:contact)");
        $state -> execute([
            "nom"=>$nom,
            "prenom"=>$nom,
            "contact"=>$contact,       
        ]);
        header ('location:../show_client.php');
    }
}else{
    header('location:create/create_client.php');
}  
?> 