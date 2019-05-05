
<?php
session_start();



$Cat = isset($_POST["Categorie"])?$_POST["Categorie"] : "";

if ($Cat == 'Utilisateur')
 {
    header('Location: ' . "connect.php");
 }

 if ($Cat == 'Vendeur')
 {
    header('Location: ' . "HPV.php");
 }

 if ($Cat == 'Admin')
 {
    header('Location: ' . "Base.html");
 }
?>

