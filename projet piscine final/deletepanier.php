<?php
session_start();
    $data = $_POST['IdArt'];
	$data1 = $_POST['Name'];
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
    $sql = "DELETE FROM `panier` WHERE `IdArt`='$data' and IdA='$data1'";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
	header('Location: ' . "panier.php?");	
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
$conn->close();

?>