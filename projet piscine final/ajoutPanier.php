<?php 

session_start();
$Id = $_SESSION['IdArt'];
$IdA = $_SESSION['IdAcheteur'];
$qte = isset($_POST["quantite"])?$_POST["quantite"] : 0;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loremipsum";
$conn = new mysqli($servername, $username, $password, $dbname);

$sql1 = "INSERT INTO panier (Quantite, Final, IdArt, IdA) VALUES ('$qte','0','$Id', '$IdA')";
if ($conn->query($sql1) == true) 
{ 
    echo "inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql1. "
           .$conn->error; 
} 


header('Location: ' . "panier.php");


?>