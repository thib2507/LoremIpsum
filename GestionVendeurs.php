<!DOCTYPE html>
<html>
<?php session_start();?>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
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
<div class="container">
<div class="row justify-content-lg-center">
	<div class="col-lg-8">
	<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	<thead>
    <tr>
      <th class="th-sm">#

      </th>
      <th class="th-sm">Username

      </th>
      <th class="th-sm">Valider

      
    </tr>
  </thead>
  <script type="text/javascript">
    $(document).ready(function(){
  $(".valid").click(function(){
    var name=$(this).attr('name');
	var Idv= $(this).attr('value');
	if(name=="IdVAccept"){
		
		$.ajax({
      url: "v.php", 
      type : 'POST', 
      data : { 
      IdV: Idv,
	  Name: name,
    },
	success: function(result){
		alert(name);
	}
	
	
    });
	
		}

if(name=="IdVrefuse"){
		
		$.ajax({
      url: "r.php", 
      type : 'POST', 
      data : { 
      IdV: Idv, 
	  Name: name,
    }
    });
	}
   location.reload(true);
  });
});
</script>
  
  
  
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
  
  $sql = 'SELECT * FROM `vendeurs` Where Pending=0';
  $req= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));

  echo '<tbody>';
 


while ( $donnees = mysqli_fetch_assoc($req)) 	// Renvoit les valeurs de la bdd
            {
				echo '<tr>';
                    echo '<td>' . $donnees['IdV'] . '</td>';
                    echo '<td>' . $donnees['Username'] . '</td>';
                    echo '<td><button class="valid"
					type="button" value="'.$donnees['IdV'].'" name="IdVAccept">
				<img src="check.png" width="15" height="15">
				</button><button class="valid"
				type="button" value="'.$donnees['IdV'].'" name="IdVrefuse">
			<img src="clear.png" width="15" height="15">
				</button></td>';

			echo '</tr>';
			
			}
  
  ?>
    
  </tbody>
</table>
</div>
</div>
</div>

</body>

<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

    <div style="background-color: #29b6f6;">
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

</html>

