<!DOCTYPE html>
<html>
  <?php
session_start();
?>
  <!--utlisier $_SESSION['IdArt'] pour recup mon id -->
  <head>
    <title>Index</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.0.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <style type="text/css">
    html, body {
    margin: 0;
    padding: 0;
    }
    .prevArrow{
    margin:0px;
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
    height:350px;
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
    .slider .box img{
    height:100%;
    width:auto;
    margin-left:auto;
    margin-right:auto;
    
    }
    .slider .box{
    height:350px;

    }
    .slider .box:hover{
    opacity:0.5;
    }
    .slick-slide img {
      height:100%;
    width: auto;
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
    .slick-current {
    opacity: 1;
    }
    .dropdown{
    display:inline-block;
    }
    .content{
    display:none;
    position: absolute;
    background-color:#F1EDEB
    }
    .dropdown:hover .content{
    display:block;
    }
    .tailles{
    font-size:auto;
    }

    #addToCart{
      background-color:#F1EDEB;
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
          <a class="  col-sm-1" href="choiceCo.php"><img src="user.png" width="30" height="30"/></a>
        </div>
      </nav>
      <div class="ontainer-fluid px-0 pl-5">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <div class="row">
              <div class="col-lg-6 ">

 <!--https://kenwheeler.github.io/slick/-->
                <section class="lazy slider" data-sizes="50vw">
                  <?php
$database = "loremipsum";
$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);
$Id = $_SESSION['IdArt'];
if ($db_found) {
	$sql = "SELECT * FROM multimedia WHERE IdArt = $Id ";
}
$result = mysqli_query($db_handle, $sql);
$data = mysqli_fetch_assoc($result);

if ($data['Im1'] != NULL) {
	echo "<div class=\"box\">
                    <img data-lazy=\"" . $data['Im1'] . " \"  data-srcset=\"" . $data['Im1'] . " , " . $data['Im1'] . "\">
                  </div>";
}
if ($data['Im2'] != NULL) {
	echo "<div class=\"box\">
                    <img data-lazy=\"" . $data['Im2'] . " \"  data-srcset=\"" . $data['Im2'] . " , " . $data['Im2'] . "\">
                  </div>";
}
if ($data['Im3'] != NULL) {
	echo "<div class=\"box\">
                    <img data-lazy=\"" . $data['Im3'] . " \"  data-srcset=\"" . $data['Im3'] . " , " . $data['Im3'] . "\">
                  </div>";
}
if ($data['Im4'] != NULL) {
	echo "<div class=\"box\">
                    <img data-lazy=\"" . $data['Im4'] . " \"  data-srcset=\"" . $data['Im4'] . " , " . $data['Im4'] . "\">
                  </div>";
}

?>
                </section>

              </div>
<?php

  if ($db_found) {
    $sql = "SELECT * FROM articles WHERE IdArt = $Id ";
  }
  $result = mysqli_query($db_handle, $sql);
  $data = mysqli_fetch_assoc($result);
?>
              <div class="col-lg-3 col-lg-push-3">
                <h3><?php echo $data["Nom"]; ?></h3>
                <br>
                <p>prix : <?php echo $data["Prix"]; ?> </p>
                


<?php

  

  if ($db_found) {
    $sql = "SELECT * FROM articles WHERE IdArt = $Id ";
  }
  $result = mysqli_query($db_handle, $sql);
  $data = mysqli_fetch_assoc($result);
  if ($data["Type"] == 2 || $data["Type"] == 1 ) {

    echo '<table>
    <tr>
    <td>
      <p>taille :  </p>
    </td>
    <td>';

    if($data["Type"] == 2)
    {
      if ($db_found) {
        $sql = "SELECT Taille,Quantite FROM chaussures WHERE IdArt = $Id ";
      }
    }

    if($data["Type"] == 1)
    {
      if ($db_found) {
        $sql = "SELECT Taille,Quantite FROM vetements WHERE IdArt = $Id ";
      }
    }
    
    $result = mysqli_query($db_handle, $sql);
    $tailles = array();
    $bool = 0;
    while ($data = mysqli_fetch_assoc($result)) {
      if ($data["Quantite"]) {
        if (sizeof($tailles) != 0) {
          for ($i = 0; $i < sizeof($tailles); $i++) {
            if ($tailles[$i] == $data["Taille"]) {$bool = 1;}
          }
          if ($bool == 0) {
            array_push($tailles, $data['Taille']);
          }
          if ($bool == 1) {$bool = 0;}
        } else {
          array_push($tailles, $data['Taille']);
        }
      }

    }
    sort($tailles);
    echo '<div class="form-group">
                          <select class="form-control" id="Taille" placeholder="Taille">';
    for ($i = 0; $i < sizeof($tailles); $i++) {
      echo '<option>' . $tailles[$i] . '</option>';
    }
    echo '  </select>
                        </div>';
  }

  if ($data["Type"] == 3 || $data["Type"] == 4 ) {

    echo '<table>
    <tr>
    <td>
      <p>Artiste :  </p>
    </td>';

    
      if ($db_found) {
        $sql = "SELECT * FROM livreschansons WHERE IdArt = $Id ";
      }
  
    $result = mysqli_query($db_handle, $sql);
    $data = mysqli_fetch_assoc($result);
    
      if ($data["Quantite"]) {
       
        }

        echo '<td>'.$data["Auteur"].'</td></tr></table>';

        echo '<table> <tr> <td> <p>Année : <p> </td>
              <td>' .$data["Annee"].'</td> </tr> </table>';

              if ($data["Quantite"]) {
       
                echo '<p>En Stock</p>';
              }

              else{
                echo '<p>Hors Stock</p>';
              }

      
      }





  
?>

                  
<?php
  if ($db_found) {
    $sql = "SELECT * FROM articles WHERE IdArt = $Id ";
  }
  $result = mysqli_query($db_handle, $sql);
  $data = mysqli_fetch_assoc($result);
  if ($data["Type"] == 2 || $data["Type"] == 1) {

    echo '  </td>
    </tr>
      </table>
      <p>couleurs :
      </p>';

    if ($data["Type"] == 2) {
      if ($db_found) {
        $sql = "SELECT Couleur,Quantite FROM chaussures WHERE IdArt = $Id ";
      }
    }
    if ($data["Type"] == 1) {
      if ($db_found) {
        $sql = "SELECT Couleur,Quantite FROM vetements WHERE IdArt = $Id ";
      }
    }

    $result = mysqli_query($db_handle, $sql);
    $couleur = array();
    $bool = 0;
    while ($data = mysqli_fetch_assoc($result)) {
      if ($data["Quantite"]!=0) {
        if (sizeof($couleur) != 0) {
          for ($i = 0; $i < sizeof($couleur); $i++) {
            if ($couleur[$i] == $data["Couleur"]) {$bool = 1;}
          }
          if ($bool == 0) {
            array_push($couleur, $data['Couleur']);
          }
          if ($bool == 1) {$bool = 0;}
        } else {
          array_push($couleur, $data['Couleur']);
        }
      }

    }
    sort($couleur);
    echo '<div class="form-group">
                    <select class="form-control" id="Taille" placeholder="Taille">';
    for ($i = 0; $i < sizeof($couleur); $i++) {
      echo '<option>' . $couleur[$i] . '</option>';
    }
    echo '  </select>
                  </div>';
  }
?>

<?php 
if ($db_found) {
  $sql = "SELECT * FROM articles WHERE IdArt = $Id ";
}
$result = mysqli_query($db_handle, $sql);
$data = mysqli_fetch_assoc($result);

?>
              </div>
              <div class="col-lg-3 col-lg-pull-2" id="addToCart"> 
                
              <h4><?php echo $data["Prix"] ?> Euros</h4>
              <p>Livraison gratuite</p>
              <form action="ajoutPanier.php" method="post">
              <label for="quantite">Quantité :</label>
              <td><input type="number" name="quantite"/></td>
              <button class="add" type="submit" >Ajouter au panier</button>
              </form>
            </div>
              
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 pl-5">
        <div class="row">
          <div class="col-lg-12 mt-5">

<?php
  if ($db_found) {
    $sql = "SELECT * FROM articles WHERE IdArt = $Id ";
  }
  $result = mysqli_query($db_handle, $sql);
  $data = mysqli_fetch_assoc($result);
?>

            <h3>Description</h3>
            <p><?php echo $data["Descr"]; ?></p>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
      <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
      <script type="text/javascript">
       //https://kenwheeler.github.io/slick/
      $(document).on('ready', function() {
      $(".lazy").slick({
      lazyLoad: 'ondemand', // ondemand progressive anticipated
      infinite: true
      });
      });
      </script>
    </body>
    
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">

<div style="background-color: #29b6f6;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center ">

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