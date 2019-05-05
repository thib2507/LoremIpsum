<!DOCTYPE html>
<html>
<?php session_start();?>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" id="bootstrap-css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<link rel="stylesheet" type="text/css" href="HPadmin.css">
<script type="text/javascript" href="HPadmin.php">
$(document).ready(function(){
$('.header').height($(window).height());
});
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Base.html"><img src="LIadmin.png" width="200" height="70"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="Commandes.php">Commandes</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ressources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="GestionVendeurs.php">Nouveaux vendeurs</a>
          <a class="dropdown-item" href="Newart.php">Nouveaux articles</a>
		  <a class="dropdown-item" href="DeleteVendeurs.php">Supprimer un vendeur</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="HPadmin.php">Analyse des ventes</a>
        </div>
      </li>
    </ul>
	<div class="col-sm-1">
		<h6><?php echo 'Bonjour ' . $_SESSION['id'];?></h6>
	</div>
	<div class="col-sm-1">
      <a class="btn" href="myaccount.php"><img src="avataraccount.png" width="30" height="30"/></a>
    </div>
	
  </div>
  
</nav>


<div class="container mt-5">
    	<div class="row">
			<div class="col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<center><h3 class="panel-title ">Meilleurs vendeurs</h3></center>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>
					<table class="table table-hover" id="dev-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Username</th>
								<th>Mail</th>
								<th>Nombre de ventes</th>
							</tr>
						</thead>
						
<tbody>

<?php

$Username = $_SESSION['id'];

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
	
}
  
  $sql = 'SELECT IdV, SUM(cmptvendu) FROM articles GROUP BY IdV ORDER BY SUM(cmptvendu) DESC LIMIT 5';
  $req= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
while($donnees = mysqli_fetch_assoc($req)){
	$idv=$donnees['IdV'];
	 $sql1 = "SELECT * FROM `vendeurs` Where IdV=$idv";

$req1= mysqli_query($conn,$sql1)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
while($donnees1 = mysqli_fetch_assoc($req1)){
	echo '<tr>';
	echo '<th>' . $idv . '</th>';
                    echo '<th>' . $donnees1['Username'] . '</th>';
                    echo '<th>' . $donnees1['Mail'] . '</th>';
	
}
				echo '<th>' . $donnees['SUM(cmptvendu)'] . '</th>';
	echo '</tr>';


}



 

?>




  </tbody>
					
					</table>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Dernières commandes</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="task-table-filter" data-action="filter" data-filters="#task-table" placeholder="Filter Tasks" />
					</div>
					<table class="table table-hover" id="task-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Nom</th>
								<th>Prenom</th>
								<th>Prix</th>
							</tr>
						</thead>
						
						<?php
  $Username = $_SESSION['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loremipsum";
$sql="";
$ida="";
$prix="";
$id="";
$nom="";
$prenom="";
// checking connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	
}
  
  $sql = 'SELECT * FROM `commandes` ORDER BY `IdC` ASC';
  $req= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
 
  $n= $req->num_rows;
  
  echo '<tbody>';
  
 $sql4="DELETE FROM com";
				if ($conn->query($sql4) == true) 
					{ 
						//echo "deleted successfully."; 
					} 
				else
					{ 
						echo "ERROR: Could not able to execute $sql4."
						.$conn->error; 
					}

while($donnees = mysqli_fetch_assoc($req))
 	// Renvoit les valeurs de la bdd
            {
				
				$ida= $donnees['IdA'];
				$sql1 = 'SELECT * FROM `acheteurs` Where IdA='.$ida.'';
				$req1= mysqli_query($conn,$sql1)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
				$donnees1 = mysqli_fetch_array($req1);
				
				$idart= $donnees['IdArt'];
				$sql2 = 'SELECT * FROM `articles` Where IdArt='.$idart.'';
				$req2= mysqli_query($conn,$sql2)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
				$donnees2 = mysqli_fetch_array($req2);
				
				
				$prix=$donnees2['Prix']*$donnees['Quantite'];
				$id=$donnees['IdC'];
				$prenom=$donnees1['Prenom'];
				$nom=$donnees1['Nom'];
				
				
				
				
				$sql3="INSERT INTO com (Id,Nom,Prenom, Prix) VALUES ('$id','$nom','$prenom', '$prix')";
				
if ($conn->query($sql3) == true) 
{ 
    //echo "inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql1."
           .$conn->error; 
}
				
			
}

$sql5="SELECT Id, Nom, Prenom, SUM(Prix) FROM com GROUP BY Id ORDER BY Id DESC LIMIT 5";	
			 $req3= mysqli_query($conn,$sql5)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
			 
			
			while($donnees3 = mysqli_fetch_assoc($req3))
 	// Renvoit les valeurs de la bdd
            {
				echo '<tr>';
                    echo '<th>' . $donnees3['Id'] . '</th>';
                    echo '<th>' . $donnees3['Nom'] . '</th>';
					echo '<th>' . $donnees3['Prenom'] . '</th>';
                    echo '<th>' . $donnees3['SUM(Prix)'] . '</th>';
				echo '</tr>';
		
			
			}
			 
 
  ?>
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

</body>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div style="background-color: #29b6f6; margin-top:300px">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
           
          </div>
       
        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5" >

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Entreprise</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Lorem ipsum dolor sit amet, consectetur
            adipisicing elit.</p>

        </div>
		
		<!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Produits</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Livres</a>
          </p>
          <p>
            <a href="#!">Musiques</a>
          </p>
          <p>
            <a href="#!">Vêtements</a>
          </p>
          <p>
            <a href="#!">Sport & Loisirs</a>
          </p>

        </div>
        <!-- Grid column -->
        
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Liens utiles</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Mon compte</a>
          </p>
          <p>
            <a href="#!">Commissions</a>
          </p>
          <p>
            <a href="#!">Help</a>
          </p>
         

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"><img src="iconhouse.png" width="15" height="15"/></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope mr-3"><img src="iconmail.png" width="15" height="15"/></i> info@example.com</p>
          <p>
            <i class="fas fa-phone mr-3"><img src="iconphone.png" width="15" height="15"/></i> + 01 234 567 88</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="localhost/LoremIpsum/Home.php"> LoremIpsum.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



