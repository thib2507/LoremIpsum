<?php
    $data = $_POST['IdArt'];
	$data1 = $_POST['Name'];
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
    $sql = "UPDATE `articles` SET `Pending`=1 WHERE `IdArt`=$data";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
	header('Location: ' . "Newart.php?");	
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
$conn->close();

?>