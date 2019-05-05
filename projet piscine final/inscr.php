<?php

if(isset($_POST['inscription']) && $_POST['inscription'] == 'inscription'){
	if(isset($_POST["Nom"]) && isset($_POST["Prenom"]) && isset($_POST["Mail"]) && isset($_POST["Mdp"])){
	
	
$Nom = isset($_POST["Nom"])?$_POST["Nom"] : "";
$Prenom = isset($_POST["Prenom"])?$_POST["Prenom"] : "";
$Mail = isset($_POST["Mail"])?$_POST["Mail"] : "";
$Mdp=isset($_POST["Mdp"])?$_POST["Mdp"]:"";

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
	
	echo "connection success";
}
    $sql = "INSERT INTO acheteurs (Nom,Prenom,Mail,Mdp) VALUES ('$Nom','$Prenom', '$Mail', '$Mdp')";
if ($conn->query($sql) == true) 
{ 
session_start();
$_SESSION['prenom']=$Prenom;
    echo "Records inserted successfully.";
	header('Location: ' . "Home.php");	
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
$conn->close();

}
}
?>