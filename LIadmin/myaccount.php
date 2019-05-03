<!DOCTYPE html>
<html>
<?php session_start(); ?>

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript">
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
          <a class="dropdown-item" href="#">Analyse des ventes</a>
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
<?php 
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
	echo "error connection";
}
else{
	
	//echo "connection success";
}
    $sql = "Select* From admins WHERE (Username='$_SESSION[id]')";
$requete= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
$donnees = mysqli_fetch_assoc($requete);

?>

<form action="info.php" method="post">
<div class="container">
	<div class="row justify-content-md-center">

		<div class="col-lg-4">
			<h3 class="feature-title">Mes informations</h3>
				<div class="form-group">
					<input type="text" class="form-control"
					placeholder="<?php echo $_SESSION['id'] ?>" name="Username" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control"
					placeholder="******" name="Mdp" required>
				</div>

				<input type="submit" class="btn btn-secondary btn-block"
				value="modifier" name="modifier">
		</div>
		
	</div>
</div>
</form>



</body>
</html>