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
<style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    h3 {

        font-family: 'Potra';
        src:Potra.ttf;
        padding-top:5px;
        padding-bottom:5px;
        padding-left:20px;
        background-color:#BFBDB8;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 80%;
        height:130px;
        margin: 20px auto;
    }

    .slider .box .HiddenText {
        visibility:hidden;
        text-align: center;
    }

 .slider .box:hover .HiddenText {
        visibility:visible;
    }
    .slick-slide {
      margin: 0px 20px;
    }

.box img{

    height:100%;
    width:auto;
    margin-left:auto;
    margin-right:auto;
    
}

.type{

  width:100%;

}

.box{

height:100px;
}

.slider .box:hover{

opacity:0.5;

}
.page-footer{
		margin-top: 200px;
	}

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: 1;
    }


    #category{

      background-color:#F1EDEB
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>
<body>

 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="Home.php"><img src="logow.png" width="200" height="70"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mr-sm-2" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catégories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Musique</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Vêtements</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Livres</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Sports & Loisirs</a>
            </div>
            </ul>

            <form class="form-inline col-sm-8">
            <input class="form-control mr-sm-2 col-sm-7" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success " type="submit">Search</button>
            </form>

            <a class=" col-sm-1  " href="Base.html"><img src="box.png" width="30" height="30"/></a>
            <a class=" col-sm-1 " href="Base.html"><img src="shopping-cart.png" width="30" height="30"/></a>
            <a class="  col-sm-1" href="Base.html"><img src="user.png" width="30" height="30"/></a>
        </div>
        </nav>

        <!-- https://stackoverflow.com/questions/36933107/stretch-image-to-fit-full-container-width-bootstrap -->

         <div class="container-fluid  " id="category">
       
            <div class="row" >
              <div class="col-sm-3 ">

              <button class="type" type="button" name="vet" onclick="location.href='search.php'" >Vêtements</button>

              </div>

              <div class="col-sm-3 ">

              <button class="type" type="button" name="mus" onclick="location.href='search.php'">Musique</button>

              </div>

              <div class="col-sm-3 ">
              <button class="type" type="button" name="liv" onclick="location.href='search.php'">Livres</button>


              </div>

              <div class="col-sm-3 ">
              <button class="type" type="button" name="spo" onclick="location.href='search.php'">Sports & Loisirs</button>


              </div>

    
            
        </div>
        </div>
		
<div class="container">
<div class="row justify-content-lg-center">

	<div class="col-lg-8">
	<h2>Mon panier</h2>
	<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
	<thead>

  <th class="th-sm">Image

</th>
    
      <th class="th-sm">Id article

      </th>
      <th class="th-sm">Nom

      </th>
      <th class="th-sm">Prix
</th>
</th>
      <th class="th-sm">Quantité
</th>
</th>
      <th class="th-sm">Supprimer
</th>
      
    </tr>
  </thead>
  
  <script type="text/javascript">
    $(document).ready(function(){
  $(".valid").click(function(){
    var name=$(this).attr('name');
	var IdArt= $(this).attr('value');
		
		$.ajax({
      url: "deletepanier.php", 
      type : 'POST', 
      data : { 
      IdArt: IdArt, 
	  Name: name,
    },
	success: function(result){
		alert(IdArt);
	}
    });
	
   location.reload(true);
  });
});
</script>
  
  
  
  <?php
$Username = $_SESSION['IdAcheteur']; //A mettre une fois connexion faite pour recuperer username
$id=1;
$servername = "localhost";
$username = "root";
$password = "root";
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
  
  $sql = "SELECT * FROM `panier` Where IdA='$Username' and Final=0";
  $req= mysqli_query($conn,$sql)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
  
  $image = "";

  echo '<tbody>';
 


while ( $donnees = mysqli_fetch_assoc($req)) 	// Renvoit les valeurs de la bdd
            {
        echo '<tr>';
        
        $sql2 = "SELECT Im1 FROM `multimedia` Where IdArt = ". $donnees['IdArt'] ;
        $req2= mysqli_query($conn,$sql2)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
        $data = mysqli_fetch_assoc($req2);

        echo '<td> <div class="box"><img src="'.$data['Im1'].'" alt="Pic"></div></td>';

                    echo '<td>' . $donnees['IdArt'] . '</td>';
                   
					
   $sql1 = "SELECT * FROM `articles` Where IdArt='$donnees[IdArt]'";
  $req1= mysqli_query($conn,$sql1)or die ("Mon message d'erreur presonnalisÄ‚Â©:".mysqli_error($conn));
  while ( $donnees1 = mysqli_fetch_assoc($req1)){
	  
					echo '<td>' . $donnees1['Nom'] . '</td>';
                    echo '<td>' . $donnees1['Prix'] .' € </td>';
	  
	  
  }
   echo '<td>' . $donnees['Quantite'] . '</td>';
   echo '<td><button class="valid"
					type="button" value="'.$donnees['IdArt'].'" name="'.$id.'">
				<img src="clear.png" width="15" height="15">
				</button>';
			echo '</tr>';
			
			}
  
  ?>
    
  </tbody>
</table>
</div>

</div>

<div class="row justify-content-lg-center">
  <form action="infoL.php">
<button class="add" type="submit">Acheter</button>
</form>
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

</html>

