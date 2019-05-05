<?php
    $data = $_POST['IdV'];
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
    $sql = "UPDATE `vendeurs` SET `Pending`=1 WHERE `IdV`=$data";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
	header('Location: ' . "GestionVendeurs.php?");	
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
$conn->close();

?>