<?php

if(isset($_POST['ajouter']) && $_POST['ajouter'] == 'ajouter'){
	
	
	

$NomA = isset($_POST["NomA"])?$_POST["NomA"] : "";
$Auteur=isset($_POST["Auteur"])?$_POST["Auteur"]:"";
$An=isset($_POST["An"])?$_POST["An"]:"";
$PrixV=isset($_POST["PrixV"])?$_POST["PrixV"]:"";
$Quantite=isset($_POST["Quantite"])?$_POST["Quantite"]:"";
$Description=isset($_POST["Description"])?$_POST["Description"]:"";

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loremipsum";
$sql="";
session_start();
$user = $_SESSION['id'];
echo "idv:";
echo $user;
$iv="";
$ia="";
echo "ok";


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


    


$target_file2 = $target_dir . basename($_FILES["fileToUpload2"]["name"]);

$imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

// if everything is ok, try to upload file

    if (move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2)) {
        echo "The file ". basename( $_FILES["fileToUpload2"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

$picture2= $target_file2;




$target_file3 = $target_dir . basename($_FILES["fileToUpload3"]["name"]);

$imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));

// if everything is ok, try to upload file

    if (move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3)) {
        echo "The file ". basename( $_FILES["fileToUpload3"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

$picture3= $target_file3;





$target_file4 = $target_dir . basename($_FILES["fileToUpload4"]["name"]);

$imageFileType4 = strtolower(pathinfo($target_file4,PATHINFO_EXTENSION));

// if everything is ok, try to upload file

    if (move_uploaded_file($_FILES["fileToUpload4"]["tmp_name"], $target_file4)) {
        echo "The file ". basename( $_FILES["fileToUpload4"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

$picture4= $target_file4;




// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	
	echo "connection success";
}
    $sql = "SELECT * FROM vendeurs WHERE `Username`='$user'";
    
if ($conn->query($sql) == true) 
{ 
    echo "Recuperer successfully.";	
    $req=mysqli_query($conn,$sql);
    while($id=mysqli_fetch_assoc($req)){
    $iv=$id['IdV'];
    }
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
           .$conn->error; 
} 


$sql1 = "INSERT INTO articles (Nom, Descr, Prix, Type, Pending, IdV, CmptVendu) VALUES ('$NomA','$Description','$PrixV', '4', '0','$iv', '0')";
if ($conn->query($sql1) == true) 
{ 
    echo "inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql1. "
           .$conn->error; 
} 

$sql3 = "SELECT* FROM articles ORDER BY IdArt ASC";

if ($conn->query($sql3) == true) 
{ 
    
    $req1=mysqli_query($conn,$sql3);
    echo "idart recuperer";
    While($data=mysqli_fetch_assoc($req1)){
    $ia=$data['IdArt'];
    
    }
    echo "voila l'idart".$ia."";
    
} 
else
{ 
    echo "ERROR: Could not able to execute $sql1. "
           .$conn->error; 
} 
 
$sql2 = "INSERT INTO  livreschansons (IdArt, Quantite, Auteur, Annee) VALUES ('$ia','$Quantite','$Auteur','$An')";

if ($conn->query($sql2) == true) 
{ 
    echo "inserted livres successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql2."
           .$conn->error; 
} 


$sql4 = "INSERT INTO multimedia (Video, Im1, Im2, Im3, Im4, IdArt) VALUES ('$video','$picture1','$picture2', '$picture3', '$picture4','$ia')";
if ($conn->query($sql4) == true) 
{ 
    echo "inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql1. "
           .$conn->error; 
}

$conn->close();


header('Location: ' . "EV.php?");

}
?>