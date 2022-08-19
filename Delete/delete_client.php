<?php
if (isset($_GET['id'])){
        $id_client=$_GET['id'];
        $db = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8","root", "");
        $state = $db -> prepare("DELETE from client where id=:id");
        $state->execute([
            "id"=>$id_client
        ]   
        );
        header('location:../show_client.php');
    }else{
        header('location:../show_client.php');
    }

?>