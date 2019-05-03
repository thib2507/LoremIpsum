<?php
session_start();
if(isset($_POST['modifier']) && $_POST['modifier'] == 'modifier'){

	
	
$Username = isset($_POST["Username"])?$_POST["Username"] : "";
$Mdp=isset($_POST["Mdp"])?$_POST["Mdp"]:"";
echo $Username;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loremipsum";
$sql="";
$id="";

// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo "error connection";
}
else{
	
	//echo "connection success";
}

$sql = "SELECT * FROM `admins` Where `Username` = '$_SESSION[id]'";
echo "SELECT* FROM `admins` Where 'Username'='$_SESSION[id]'";
$requete1= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisé select".mysqli_error($conn));
$donnees = mysqli_fetch_assoc($requete1);
$id=$donnees['IdAdmin'];
echo "voila l'idadmin".$id."";



    $sql1 = "UPDATE `admins` SET `Username`='$Username' WHERE `IdAdmin`='$id'";
$requete= mysqli_query($conn,$sql1)or die ("Mon message d'erreur presonnalise update".mysqli_error($conn));




 
$conn->close();


}
?>