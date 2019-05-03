<!DOCTYPE html>
<html>
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

        <!-- https://stackoverflow.com/questions/36933107/stretch-image-to-fit-full-container-width-bootstrap -->
        <div class="container-fluid px-0">
            <div class="row mx-0">
              <div class="col-12 px-0">
                 <a href="#"><img src="images/header-flash-sales.gif" width="100%" /></a>

              </div>
            </div>
          </div>


 <h3>Meilleures ventes vetements</h3>
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
</html>
