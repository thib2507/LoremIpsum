<?php
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
   
    $sql = "DELETE FROM `articles` WHERE `IdArt`=$data";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
	header('Location: ' . "SupprimerV.php");	
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
    $sql = "DELETE FROM `vetements` WHERE `IdArt`=$data";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
    header('Location: ' . "SupprimerV.php");   
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
    $sql = "DELETE FROM `chaussures` WHERE `IdArt`=$data";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
    header('Location: ' . "SupprimerV.php");   
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
    $sql = "DELETE FROM `livreschansons` WHERE `IdArt`=$data";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
    header('Location: ' . "SupprimerV.php");   
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
    $sql = "DELETE FROM `sports` WHERE `IdArt`=$data";
if ($conn->query($sql) == true) 
{ 
    echo "Records updated successfully.";
    header('Location: ' . "SupprimerV.php");   
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 

 
$conn->close();

?>