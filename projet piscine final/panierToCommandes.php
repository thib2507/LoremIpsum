<?php

session_start();
$Username = $_SESSION['IdAcheteur']; //A mettre une fois connexion faite pour recuperer username
$id=1;
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "loremipsum";
$sql="";

echo $Username;

// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	
}
  $sql = "SELECT MAX(IdC) FROM `commandes`";
  $req= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
  $donnees = mysqli_fetch_assoc($req);

    $IDc = $donnees['MAX(IdC)'];
    $IDc = $IDc + 1;

  
  $sql = "SELECT * FROM `panier` Where IdA='$Username' and Final=0";
  $req= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));


while ( $donnees = mysqli_fetch_assoc($req)) 	// Renvoit les valeurs de la bdd
            {
                
                $q=$donnees['Quantite'];
                echo $q."<br>";
                $ida=$donnees['IdA'];
                echo $donnees['IdA']."<br>";
                $idar=$donnees['IdArt'];
                echo $donnees['IdArt']."<br>";


                $sql1 = "INSERT INTO commandes (IdC, Quantite, IdA, IdArt) VALUES ('$IDc','$q','$ida', '$idar')";
                $conn->query($sql1);

            }

            $sql = "DELETE FROM `panier` WHERE IdA='$Username'";
            $conn->query($sql);

            header('Location: ' . "panier.php");



?>