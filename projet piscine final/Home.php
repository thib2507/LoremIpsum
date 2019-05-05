<!DOCTYPE html>
<html>
<?php
session_start();
?>
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

.slider .box img{

    height:100%;
    width:auto;
    margin-left:auto;
    margin-right:auto;
    
}

.type{

  width:100%;

}

.slider .box{

height:100px;
}

.slider .box:hover{

opacity:0.5;

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
            <a class="  col-sm-1" href="choiceCo.php"><img src="user.png" width="30" height="30"/></a>
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

        <!-- https://stackoverflow.com/questions/36933107/stretch-image-to-fit-full-container-width-bootstrap -->
        <div class="container-fluid px-0">
            <div class="row mx-0">
              <div class="col-12 px-0">
                 <a href="#"><img src="images/header-flash-sales.gif" width="100%" /></a>

              </div>
            </div>
          </div>


 <h3>Meilleures ventes vetements</h3>
 <!--https://kenwheeler.github.io/slick/-->
 <section class="center slider">

        <?php

        $database = "loremipsum";
        $db_handle = mysqli_connect('localhost', 'root', 'root');
        $db_found = mysqli_select_db($db_handle, $database);

        if ($db_found) {
            $sql = "SELECT * FROM articles WHERE Type = 2 OR Type = 1 ORDER BY CmptVendu DESC LIMIT 6";
        }
        $result = mysqli_query($db_handle, $sql);

        $Ids = array();
        $Pictures = array();

        while ($data = mysqli_fetch_assoc($result)) {

        array_push($Ids,$data['IdArt']);

            }

            for ($i = 0; $i < 6; $i++)

            {
                if ($db_found) {
                    $sql = "SELECT Im1 FROM multimedia WHERE IdArt = $Ids[$i] ";
                }

                $result = mysqli_query($db_handle, $sql);
                $data = mysqli_fetch_assoc($result);
                array_push($Pictures,$data['Im1']);

                echo "<div class=\"box\" name= \" "  . $Ids[$i] . "\"> 
                <a href=\"product.php\"><img src=\"" .$data['Im1']. " \"  ></a>
                <p class=\"HiddenText\">Aperçu</p>
              </div>";

            }
        ?>

     </section>   

 


        <h3>Meilleures ventes Musique</h3>

 <section class="center slider">

<?php

$database = "loremipsum";
$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    $sql = "SELECT * FROM articles WHERE Type = 4 ORDER BY CmptVendu DESC LIMIT 5";
}
$result = mysqli_query($db_handle, $sql);

$Ids = array();
$Pictures = array();

while ($data = mysqli_fetch_assoc($result)) {

array_push($Ids,$data['IdArt']);

    }


    for ($i = 0; $i < 5; $i++)

    {
        if ($db_found) {
            $sql = "SELECT Im1 FROM multimedia WHERE IdArt = $Ids[$i] ";
        }

        $result = mysqli_query($db_handle, $sql);
        $data = mysqli_fetch_assoc($result);
        array_push($Pictures,$data['Im1']);

        echo "<div class=\"box\" name= \" "  . $Ids[$i] . "\"> 
        <a href=\"product.php\"><img src=\"" .$data['Im1']. " \"  ></a>
        <p class=\"HiddenText\">Aperçu</p>
      </div>";

    }
?>

</section> 

        <h3>Meilleures ventes Livres</h3>

<section class="center slider">

<?php

$database = "loremipsum";
$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);

if ($db_found) {
    $sql = "SELECT * FROM articles WHERE Type = 3 ORDER BY CmptVendu DESC LIMIT 5";
}
$result = mysqli_query($db_handle, $sql);

$Ids = array();
$Pictures = array();

while ($data = mysqli_fetch_assoc($result)) {

array_push($Ids,$data['IdArt']);

    }


    for ($i = 0; $i < 5; $i++)

    {
        if ($db_found) {
            $sql = "SELECT Im1 FROM multimedia WHERE IdArt = $Ids[$i] ";
        }

        $result = mysqli_query($db_handle, $sql);
        $data = mysqli_fetch_assoc($result);
        array_push($Pictures,$data['Im1']);

        echo "<div class=\"box\" name= \" "  . $Ids[$i] . "\"> 
        <a href=\"product.php\"><img src=\"" .$data['Im1']. " \"  ></a>
        <p class=\"HiddenText\">Aperçu</p>
      </div>";

    }
?>

</section> 


        <h3>Meilleures ventes Musique</h3>


 <section class="center slider">
    <div class="box">
      <img src="<?php echo $Pictures[0]; ?>">
      <p class="HiddenText">Aperçu</p>
    </div>
    <div class="box">
      <img src="<?php echo $Pictures[1]; ?>">
      <p class="HiddenText">Aperçu</p>
    </div>
    <div class="box">
      <img src="<?php echo $Pictures[2]; ?>">
      <p class="HiddenText">Aperçu</p>
    </div>
    <div class="box">
      <img src="<?php echo $Pictures[3]; ?>">
      <p class="HiddenText">Aperçu</p>
    </div>
    <div class="box">
      <img src="<?php echo $Pictures[4]; ?>">
      <p class="HiddenText">Aperçu</p>
    </div>
    <div class="box">
      <img src="<?php echo $Pictures[5]; ?>">
      <p class="HiddenText">Aperçu</p>
    </div>
    
  </section>


  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
    
      //https://kenwheeler.github.io/slick/
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
    });
     </script>

 <script type="text/javascript">

$(document).ready(function(){
  $(".box").click(function(){
    var id=$(this).attr('name');

    $.ajax({
      url: "session.php", 
      type : 'POST', 
      data : { 
      IdAr: id, 
    },
      success: function(result){
      
    }});
  });


   $(".type").click(function(){
    var id=$(this).attr('name');
   if(id=="vet")
   {
      $.ajax({
        url: "session.php", 
        type : 'POST', 
        data : { 
        kat: 1 
      },
        success: function(result){
      }});
    } 

    if(id=="liv")
   {
      $.ajax({
        url: "session.php", 
        type : 'POST', 
        data : { 
        kat: 2, 
      },
        success: function(result){
        
      }});
    } 


    if(id=="mus")
   {
      $.ajax({
        url: "session.php", 
        type : 'POST', 
        data : { 
        kat: 3, 
      },
        success: function(result){
        
      }});
    } 

    if(id=="spo")
   {
      $.ajax({
        url: "session.php", 
        type : 'POST', 
        data : { 
        kat: 4, 
      },
        success: function(result){
        
      }});
    } 




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
