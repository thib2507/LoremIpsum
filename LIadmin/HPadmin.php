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
          <a class="dropdown-item" href="#">Analyse des ventes</a>
        </div>
      </li>
    </ul>
	<div class="col-sm-1">
		<h6><?php echo 'Bonjour ' . $_SESSION['id'];?></h6>
	</div>
	<div class="col-sm-1">
      <a class="btn" href="myaccount.html"><img src="avataraccount.png" width="30" height="30"/></a>
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
								<th>Nom</th>
								<th>Prenom</th>
								<th>Nombre de ventes</th>
							</tr>
						</thead>
						
						
						
						<!-- faire requete php
						
						<tbody>
							<tr>
								<td>1</td>
								<td>Kilgore</td>
								<td>Trout</td>
								<td>45</td>
							</tr>
							<tr>
								<td>2</td>
								<td>Bob</td>
								<td>Loblaw</td>
								<td>43</td>
							</tr>
							<tr>
								<td>3</td>
								<td>Holden</td>
								<td>Caulfield</td>
								<td>41</td>
							</tr>
						</tbody>
						
						
						-->
						
						
						
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
						<tbody>
							<tr>
								<td>1</td>
								<td>John</td>
								<td>Smith</td>
								<td>45,76€</td>
							</tr>
							<tr>
								<td>2</td>
								<td>THib</td>
								<td>Perr</td>
								<td>134,89€</td>
							</tr>
						</tbody>
					</table>
				</div>
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
      <a href="https://mdbootstrap.com/education/bootstrap/"> LoremIpsum.com</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->



