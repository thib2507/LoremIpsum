<?php

session_start();

$t = isset($_POST["type"])?$_POST["type"] : "";
$p = isset($_POST["proprio"])?$_POST["proprio"] : "";
$c = isset($_POST["card"])?$_POST["card"] : 0;
$exp = isset($_POST["exp"])?$_POST["exp"] : 0000;
$crypt = isset($_POST["crypt"])?$_POST["crypt"] : 0;

$id=$_SESSION['IdAcheteur'];



$Username = $_SESSION['IdAcheteur']; //A mettre une fois connexion faite pour recuperer username
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loremipsum";
$sql="";


// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	
}
 

$sql = "INSERT INTO infosp (Type, Numero, Nom, dateexp,code,IdA) VALUES ('$t','$c','$p', '$exp', '$crypt','$id')";
if ($conn->query($sql) == true) 
{ 
    echo "inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

header('Location: ' . "panierToCommandes.php");

        





?>