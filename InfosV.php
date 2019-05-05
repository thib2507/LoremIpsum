<?php
session_start();
if(isset($_POST['modifier']) && $_POST['modifier'] == 'modifier'){

	
	
$Username = isset($_POST["Username"])?$_POST["Username"] : "";
$Mdp=isset($_POST["Mdp"])?$_POST["Mdp"]:"";
$Mail=isset($_POST["Mail"])?$_POST["Mail"]:"";
echo $Username;
$servername = "localhost";
$username = "root";
$password = "root";
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

$sql = "SELECT* FROM vendeurs Where Username='$_SESSION[id]'";

$requete1= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisé select".mysqli_error($conn));
$donnees = mysqli_fetch_assoc($requete1);
$id=$donnees['IdV'];
echo "voila le vendeur id :".$id.".";



    $sql1 = "UPDATE `vendeurs` SET `Username`='$Username', Mail='$Mail' WHERE `IdV` = '$id'";


$requete = mysqli_query($conn,$sql1)or die ("Mon message d'erreur presonnalise update".mysqli_error($conn));


session_destroy();
session_start();
$_SESSION[id]=$Username;

header('Location: ' . "CompteVendeur.php?");

 
$conn->close();


}
?>