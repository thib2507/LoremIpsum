<?php

session_start();

$target_dir = "Images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// if everything is ok, try to upload file

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

$picture1= $target_file;


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loremipsum";
$sql="";
$name = $_SESSION['id'];

// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	
	echo "connection success";
}
    $sql = "UPDATE `vendeurs` SET `img`='$target_file' WHERE `Username`='$name'";
    
$conn->query($sql); 

header('Location: ' . "EV.php?");


?>