<?php

if(isset($_POST['ajouter'])== 'ajouter'){
	
	
	
$picture = isset($_POST["picture"])?$_POST["picture"] : "";
$NomA = isset($_POST["NomA"])?$_POST["NomA"] : "";
$Taille=isset($_POST["Taille"])?$_POST["Taille"]:"";
$Quantite=isset($_POST["Q"])?$_POST["Q"]:"";
$Couleur=isset($_POST["Couleur"])?$_POST["Couleur"]:"";
$Sexe=isset($_POST["Sexe"])?$_POST["Sexe"]:"";
$PrixV=isset($_POST["PrixV"])?$_POST["PrixV"]:"";

$Description=isset($_POST["Description"])?$_POST["Description"]:"";
echo "voila:".$Quantite."";
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


$sql1 = "INSERT INTO articles (Nom, Descr, Prix, Type, Pending, IdV, CmptVendu) VALUES ('$NomA','$Description','$PrixV', '1', '0','$iv', '0')";
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
 
$sql2 = "INSERT INTO  vetements (IdArt, Taille, Quantite, IdGr, Couleur, Sexe) VALUES ('$ia','$Taille','$Quantite', '0', '$Couleur', '$Sexe')";

if ($conn->query($sql2) == true) 
{ 
    echo "inserted vetements successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql2. "
           .$conn->error; 
} 

$conn->close();


}
?>