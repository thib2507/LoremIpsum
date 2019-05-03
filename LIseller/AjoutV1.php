<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
<title>Ajout Vente</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<link rel="stylesheet" type="text/css" href="AjoutV.css">
<link rel="stylesheet" href="http://unpkg.com/simplebar@latest/dist/simplebar.css">
<script type="text/javascript">
$(document).ready(function(){
$('.header').height($(window).height());
});
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="Base.html"><img src="logoseller.png" width="200" height="70"/></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">Ressources</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Services
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Vendre sur LoremIpsum</a>
					<a class="dropdown-item" href="#">Expédié par LoremIpsum</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">LoremIpsum Premium</a>
				</div>
			</li>
		</ul>
		<div class="col-sm-1">
		
	</div>
	<div class="col-sm-1">
			<a class="btn" href="myaccount.html"><img src="avataraccount.png" width="30" height="30"/></a>
		</div>
	</div>
	
</nav>

<script src="http://unpkg.com/simplebar@latest/dist/simplebar.js"></script>

<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12">
		<h2>Mon Espace Vendeur --> Ajouter un article à la vente</h2>
		</div>
	</div>
</div>


<?php


$Cat = isset($_POST["Categorie"])?$_POST["Categorie"] : "";

if ($Cat == 'Vêtements')
 {
	?>



<form action="AjoutFinV.php" method="post">
	<div class="container-fluid">
		<div class="row justify-content-lg-center">
			<div class="col-lg-4 mt-4">
				<h6>Catégorie vêtements</h6>

					
						<input type="text" class="form-control" placeholder="Nom de l'article" name="NomA" required> <br>
						<input type="number" class="form-control" placeholder="Prix de vente" name="PrixV" required> <br>
								<div class="form-group row">
									<label class="col-lg-4 col-form-label font-weight-semibold">Image:</label>
									<div class="col-lg-2">
										<input type="file" name="picture" class="file-input" data-browse-class="btn btn-primary btn-block" data-show-remove="true" data-show-caption="true" data-show-upload="false" data-fouc>
									</div>
						</div>
						<textarea class="form-control" placeholder="Description" name="Description" required></textarea> <br>
						<textarea class="form-control" placeholder="Informations supplémentaires" name="Infos" ></textarea> <br>

				</div>
			</div>

				<div class="row">
					<div class="col-lg-4 mt-4">
						<div class="form-group" name="Taille">
									<label for="Taille">Taille :</label>
										<select class="form-control" name="Taille" id="Taille" placeholder="Taille">
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
										 </select>
						</div>

						<div class="form-group" name="Sexe1">
								<label for="Sexe1">Sex :</label>
									<input type="radio" name="Sexe1" value="H"> Homme 
									<input type="radio" name="Sexe1" value="F"> Femme 

						</div>

				

									
						
						<div class="form-group" name="Couleur1">
									<label for="Couleur1">Couleur :</label>
										<select class="form-control" name="Couleur1" id="Couleur" placeholder="Couleur">
											<option>Bleu</option>
											<option>Rouge</option>
											<option>Vert</option>
											<option>Jaune</option>
											<option>Noir</option>
										 </select>
						</div>
						<input type="number" name="Q1"  class="form-control" placeholder="Quantite" required> <br>

		 			
					</div>
						
				
				
			

			
					<div class="col-lg-4 mt-4">
						<div class="form-group">
									<label for="Taille2">Taille :</label>
										<select class="form-control" id="Taille" placeholder="Taille">
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
										 </select>
						</div>

						<div class="form-group">
								<label for="Sexe2">Sex :</label>
									<input type="radio" name="Sexe2" value="Homme"> Homme 
									<input type="radio" name="Sexe2" value="Femme"> Femme 

						</div>


						<div class="form-group">
									<label for="Couleur">Couleur :</label>
										<select class="form-control" id="Couleur" placeholder="Couleur">
											<option>Bleu</option>
											<option>Rouge</option>
											<option>Vert</option>
											<option>Jaune</option>
											<option>Noir</option>
										 </select>
						</div>

		 				<input type="number" class="form-control" placeholder="Quantité" name="Q2"> <br>
					</div>
						
				
				
			

					<div class="col-lg-4 mt-4">
						<div class="form-group">
									<label for="Taille3">Taille :</label>
										<select class="form-control" name="Taille3" id="Taille" placeholder="Taille">
											<option>S</option>
											<option>M</option>
											<option>L</option>
											<option>XL</option>
										 </select>
						</div>

						<div class="form-group">
								<label for="Sexe3">Sex :</label>
									<input type="radio" name="Sexe3" value="Homme"> Homme 
									<input type="radio" name="Sexe3" value="Femme"> Femme 

						</div>


						<div class="form-group">
									<label for="Couleur3">Couleur :</label>
										<select class="form-control" name="Couleur3" id="Couleur" placeholder="Couleur">
											<option>Bleu</option>
											<option>Rouge</option>
											<option>Vert</option>
											<option>Jaune</option>
											<option>Noir</option>
										 </select>
						</div>

		 				<input type="number" class="form-control" placeholder="Quantité" name="Q3" > <br>

					
					</div>
						
				
				</div>
			</div>
	</div>

	<div class="row justify-content-lg-center">
		<div class="col-lg-4 mt-5">
	<input type="submit" class="btn btn-secondary btn-block" value="ajouter" name="ajouter">
		</div>
	</div>
 </form>



	<?php
}
?>


<?php


$Cat = isset($_POST["Categorie"])?$_POST["Categorie"] : "";

if ($Cat == 'Chaussures') {
	?>

<form action="AjoutFinC.php" method="post">
	<div class="container-fluid">
	 <div class="row justify-content-lg-center">
		<div class="col-lg-4 mt-4">
			<h6>Catégorie Chaussures</h6>



					<input type="text" class="form-control"	placeholder="Nom de l'article" name="NomA" required> <br>

					<input type="number" class="form-control"	placeholder="Prix de vente" name="PrixV" required> <br>

					<div class="form-group row">
						<label class="col-lg-2 col-form-label font-weight-semibold">Image:</label>
							<div class="col-lg-10">
								<input type="file" name="picture" class="file-input" data-browse-class="btn btn-primary btn-block" data-show-remove="true" data-show-caption="true" data-show-upload="false" data-fouc>
							</div>
					</div>

					<textarea class="form-control" placeholder="Description" name="Desc" required></textarea> <br>

					<textarea class="form-control" placeholder="Informations supplémentaires" name="Infos" required></textarea> <br>


				</div>
			</div>


<div class="row">
	<div class="col-lg-4">
		<div class="form-group">
					<label for="Taille">Taille :</label>
						<select class="form-control" id="Taille" placeholder="Taille">
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
					 </select>
		</div>

		<div class="form-group">
					<label for="Taille">Sex :</label>
						<input type="radio" name="genre" value="Homme"> Homme 
						<input type="radio" name="genre" value="Femme"> Femme 

		</div>

		<div class="form-group">
									<label for="Couleur">Couleur :</label>
										<select class="form-control" id="Couleur" placeholder="Couleur">
											<option>Bleu</option>
											<option>Rouge</option>
											<option>Vert</option>
											<option>Jaune</option>
											<option>Noir</option>
										 </select>
						</div>

		<input type="number" class="form-control" placeholder="Quantité" name="Quantite" required> <br>

				<input type="submit" class="btn btn-secondary btn-block"
				value="ajouter" name="add1">
				
		
			</div>

				<div class="col-lg-4">
		<div class="form-group">
					<label for="Taille">Taille :</label>
						<select class="form-control" id="Taille" placeholder="Taille">
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
					 </select>
		</div>

		<div class="form-group">
					<label for="Taille">Sex :</label>
						<input type="radio" name="genre" value="Homme"> Homme 
						<input type="radio" name="genre" value="Femme"> Femme 

		</div>

		<div class="form-group">
									<label for="Couleur">Couleur :</label>
										<select class="form-control" id="Couleur" placeholder="Couleur">
											<option>Bleu</option>
											<option>Rouge</option>
											<option>Vert</option>
											<option>Jaune</option>
											<option>Noir</option>
										 </select>
						</div>

		<input type="number" class="form-control" placeholder="Quantité" name="Quantite" required> <br>

				<input type="submit" class="btn btn-secondary btn-block"
				value="ajouter" name="add1">
				
		
			</div>


				<div class="col-lg-4">
		<div class="form-group">
					<label for="Taille">Taille :</label>
						<select class="form-control" id="Taille" placeholder="Taille">
							<option>36</option>
							<option>37</option>
							<option>38</option>
							<option>39</option>
							<option>40</option>
							<option>41</option>
							<option>42</option>
							<option>43</option>
							<option>44</option>
							<option>45</option>
							<option>46</option>
					 </select>
		</div>

		<div class="form-group">
					<label for="Taille">Sex :</label>
						<input type="radio" name="genre" value="Homme"> Homme 
						<input type="radio" name="genre" value="Femme"> Femme 

		</div>

		<div class="form-group">
									<label for="Couleur">Couleur :</label>
										<select class="form-control" id="Couleur" placeholder="Couleur">
											<option>Bleu</option>
											<option>Rouge</option>
											<option>Vert</option>
											<option>Jaune</option>
											<option>Noir</option>
										 </select>
						</div>

		<input type="number" class="form-control" placeholder="Quantité" name="Quantite" required> <br>

				<input type="submit" class="btn btn-secondary btn-block"
				value="ajouter" name="add1">
				
		
			</div>
		</div>
	</div>
 </form>




	<?php
}
?>


<?php


$Cat = isset($_POST["Categorie"])?$_POST["Categorie"] : "";

if ($Cat == 'Livres') {
	?>

<form action="AjoutFinL.php" method="post">
	<div class="container-fluid">
	 <div class="row justify-content-lg-center">
		<div class="col-lg-4 mt-4">
			<h6>Catégorie Livres</h6>




		<div class="form-group row">
			<label class="col-lg-2 col-form-label font-weight-semibold">Image:</label>
				<div class="col-lg-10">
					<input type="file" name="picture" class="file-input" data-browse-class="btn btn-primary btn-block" data-show-remove="true" data-show-caption="true" data-show-upload="false" data-fouc>
				</div>
		</div>
			 
				<input type="text" class="form-control"
				placeholder="Nom de l'article" name="NomA" required> <br>

				<input type="text" class="form-control"
				placeholder="Auteur" name="Auteur" required> <br>

				<input type="number" class="form-control"
				placeholder="Année d'édition" name="An" required> <br>

				<input type="number" class="form-control"
				placeholder="Prix de vente" name="PrixV" required> <br>

				 <input type="number" class="form-control"
				placeholder="Quantité" name="Quantite" required> <br>

				<textarea class="form-control"
				placeholder="Description" name="Description" required></textarea> <br>

				<textarea class="form-control"
				placeholder="Informations supplémentaires" name="Infos"></textarea> <br>

				<input type="submit" class="btn btn-secondary btn-block"
				value="ajouter" name="ajouter">
				
		
			</div>
		</div>
	</div>
 </form>




	<?php
}
?>

<?php

$Cat = isset($_POST["Categorie"])?$_POST["Categorie"] : "";

if ($Cat == 'Musiques') {
	?>

<form action="AjoutFinM.php" method="post">
	<div class="container-fluid">
	 <div class="row justify-content-lg-center">
		<div class="col-lg-4 mt-4">
			<h6>Catégorie Musiques</h6>




		<div class="form-group row">
			<label class="col-lg-2 col-form-label font-weight-semibold">Image:</label>
				<div class="col-lg-10">
					<input type="file" name="picture" class="file-input" data-browse-class="btn btn-primary btn-block" data-show-remove="true" data-show-caption="true" data-show-upload="false" data-fouc>
				</div>
		</div>
			 
				<input type="text" class="form-control"
				placeholder="Nom de l'article" name="NomA" required> <br>

				<input type="text" class="form-control"
				placeholder="Groupe ou chanteur" name="Auteur" required> <br>

				<input type="number" class="form-control"
				placeholder="Année de sortie" name="An" required> <br>

				<input type="number" class="form-control"
				placeholder="Prix de vente" name="PrixV" required> <br>

				 <input type="number" class="form-control"
				placeholder="Quantité" name="Quantite" required> <br>

				<textarea class="form-control"
				placeholder="Description" name="Description" required></textarea> <br>

				<textarea class="form-control"
				placeholder="Informations supplémentaires" name="Infos"></textarea> <br>

				<input type="submit" class="btn btn-secondary btn-block"
				value="ajouter" name="ajouter">
				
		
			</div>
		</div>
	</div>
 </form>




	<?php
}
?>

<?php


$Cat = isset($_POST["Categorie"])?$_POST["Categorie"] : "";

if ($Cat == 'Sport et Loisirs') {
	?>

<form action="AjoutFinS.php" method="post">
	<div class="container-fluid">
	 <div class="row justify-content-lg-center">
		<div class="col-lg-4 mt-4">
			<h6>Catégorie Sport et Loisirs</h6>

	

		<div class="form-group row">
			<label class="col-lg-2 col-form-label font-weight-semibold">Image:</label>
				<div class="col-lg-10">
					<input type="file" name="picture" class="file-input" data-browse-class="btn btn-primary btn-block" data-show-remove="true" data-show-caption="true" data-show-upload="false" data-fouc>
				</div>
		</div>
			 
				<input type="text" class="form-control"
				placeholder="Nom de l'article" name="NomA" required> <br>

				<input type="number" class="form-control"
				placeholder="Prix de vente" name="PrixV" required> <br>

				<input type="number" class="form-control"
				placeholder="Quantité" name="Quantite" required> <br>

				<textarea class="form-control"
				placeholder="Description" name="Description" required></textarea> <br>

				<textarea class="form-control"
				placeholder="Informations supplémentaires" name="Infos" required></textarea> <br>

				<input type="submit" class="btn btn-secondary btn-block"
				value="ajouter" name="ajouter">
				
		
			</div>
		</div>
	</div>
 </form>




	<?php
}
?>


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


</html>