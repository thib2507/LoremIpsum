<?php

session_start();

$a1 = isset($_POST["Adresse1"])?$_POST["Adresse1"] : "";
$a2 = isset($_POST["Adresse2"])?$_POST["Adresse2"] : "";
$v = isset($_POST["Ville"])?$_POST["Ville"] : "";


$cp = isset($_POST["CodePostal"])?$_POST["CodePostal"] : 0;
$pay = isset($_POST["Pays"])?$_POST["Pays"] : "";
$tel = isset($_POST["Telephone"])?$_POST["Telephone"] : "";

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
 

$sql = "INSERT INTO infosl (Adresse1, Adresse2, Ville, CodePost,Pays,Phone,IdA) VALUES ('$a1','$a2','$v', '$cp', '$pay', '$tel','$id')";
$conn->query($sql);

header('Location: ' . "infoP.php");

        





?>