<?php

if(isset($_POST['inscription']) && $_POST['inscription'] == 'inscription'){
	if(isset($_POST["Username"]) && isset($_POST["Mail"]) && isset($_POST["Mdp"])){
	
	
$Username = isset($_POST["Username"])?$_POST["Username"] : "";
$Mail = isset($_POST["Mail"])?$_POST["Mail"] : "";
$Mdp=isset($_POST["Mdp"])?$_POST["Mdp"]:"";

$servername = "localhost";
$username = "root";
$password = "";
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
    $sql = "INSERT INTO vendeurs (Username,Mail,Mdp) VALUES ('$Username', '$Mail', '$Mdp')";
if ($conn->query($sql) == true) 
{ 
    echo "Records inserted successfully.";
	header('Location: ' . "EV.html?username=".$Username);	
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