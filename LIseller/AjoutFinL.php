<?php

if(isset($_POST['ajouter']) && $_POST['ajouter'] == 'ajouter'){
	
	
	
$picture = isset($_POST["picture"])?$_POST["picture"] : "";
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


$sql1 = "INSERT INTO articles (Nom, Descr, Prix, Type, Pending, IdV, CmptVendu) VALUES ('$NomA','$Description','$PrixV', '3', '0','$iv', '0')";
if ($conn->query($sql1) == true) 
{ 
    echo "inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql1. "
           .$conn->error; 
} 

$sql3 = "SELECT* FROM articles";

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
    echo "ERROR: Could not able to execute $sql2. "
           .$conn->error; 
} 

$conn->close();


}
?>