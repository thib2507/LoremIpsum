<?php

if(isset($_POST['connect']) && $_POST['connect'] == 'connect'){
	if(isset($_POST["Mail"])  && isset($_POST["Mdp"])){
	
	
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
    $sql = "Select * From acheteurs WHERE (Mail='$Mail' && Mdp='$Mdp')";
$requete= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisĂ©:".mysqli_error($conn));



if(mysqli_num_rows( $requete) == 1) 
{
    $data = mysqli_fetch_assoc($requete);
    session_start();
        $_SESSION['prenom']=$Prenom;
        $_SESSION['IdAcheteur']=$data['IdA'];


   
	header('Location: ' . "Home.php");
    }
    else
    {
        echo 'Mauvais pseudo/mot de passe';
    }

 
$conn->close();

}
}
?>