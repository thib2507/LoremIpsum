<?php

if(isset($_POST['connect']) && $_POST['connect'] == 'connect'){
	if(isset($_POST["Username"])  && isset($_POST["Mdp"])){
	
	
$Username = isset($_POST["Username"])?$_POST["Username"] : "";
$Mdp=isset($_POST["Mdp"])?$_POST["Mdp"]:"";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loremipsum";
$sql="";
echo "ok";
// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	echo "error connection";
}
else{
	
	echo "connection success";
}
    $sql = "Select* From admins WHERE (Username='$Username' && Mdp='$Mdp')";
$requete= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisĂ©:".mysqli_error($conn));


if(mysqli_num_rows( $requete) == 1) 
{
	session_start();
        $_SESSION['id'] = $Username;
        header('Location: ' . "HPadmin.php");
    }
    else
    {
        echo 'Mauvais pseudo/mot de passe';
    }

 
$conn->close();

}
}
?>