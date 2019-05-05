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

    

    .box .HiddenText {
            visibility:hidden;
            text-align: center;
        }

    .box:hover .HiddenText {
            visibility:visible;
        }
    

    .box img{

        height:auto;
        width:100px;
        margin-left:auto;
        margin-right:auto;
        
    }

    .box{

    height:100px;
    display: inline-block;
    margin-left:5px;
        margin-right:5px;
    }

    .box:hover{

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

        .slick-current {
        opacity: 1;
        }

        #left-column{
            margin-top:50px;
            background-color:#F1EDEB
        }

        #tick2{

            margin-left:15px;
        }

        #tick4{

    margin-left:15px;
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

        <div class="container-fluid  " id="category">
       
       <div class="row" >
         <div class="col-sm-3 ">

         <button class="type" type="button">Vêtements</button>

         </div>

         <div class="col-sm-3 ">

         <button class="type" type="button">Musique</button>

         </div>

         <div class="col-sm-3 ">
         <button class="type" type="button">Livres</button>


         </div>

         <div class="col-sm-3 ">
         <button class="type" type="button">Sports & Loisirs</button>


         </div>


       
   </div>
   </div>

    <div class="container-fluid px-0 pl-5">
       
       <div class="row">
         <div class="col-lg-3 " id="left-column">

<?php 


$chau=0;
$vet=0;
$tc=0;
$tv="";
$col="";
$h=0;
$f=0;

    if(isset($_POST['tick1']))
    {
        $vet=1;
    }
    else
    {
        $vet=0;
    }

    if(isset($_POST['tick2']))
    {
        $chau=1;
    }
    else
    {
        $chau=0;
    }
       
    if(isset($_POST['tick3']))
    {
        $h=1;
    }
    else
    {
        $h=0;
    }

    if(isset($_POST['tick4']))
    {
        $f=1;
        
    }
    else
    {
        $f=0;
    }

    if(isset($_POST['TailleC']))
    {
        $tc=$_POST['TailleC'];
        
    }
    else
    {
        $tc="";
    }

    if(isset($_POST['TailleV']))
    {
        $tv=$_POST['TailleV'];
        
    }
    else
    {
        $tv="";
        
    }

    if(isset($_POST['Color']))
    {
        $col=$_POST['Color'];
    }
    else
    {
        $col="";
        
    }

  
    echo ' <form action="" method="post">
    <table>
        <td>           
        <tr>  
            <input class="checkbox" type="checkbox" name="tick1" unchecked>
            <label for="tick1">Vêtements</label>
        </tr>
        <tr>  
            <input class="checkbox" type="checkbox" name="tick2" id="tick2" unchecked>
            <label for="tick2">Chaussures</label>
        </tr>
        </td>
    </table>

    <p>Tailles:</p>

    <table>
        <td>           
        <tr>
    <div class="form-group">
        <p>Chaussures</p>
        <select class="form-control" name="TailleC" placeholder="Taille">;
            <option></option>
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
        </tr>
        <tr>  
        <div class="form-group">
        <p>Vêtements</p>
        <select class="form-control" name="TailleV" placeholder="Taille">;
            <option></option>
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        
        </select>
    </div>
        </tr>
        </td>
    </table>

    

    <p>Couleur:</p>
    
    <div class="form-group">
        <select class="form-control" name="Color" placeholder="Taille">
            <option></option>
            <option>Bleu</option>
            <option>Rouge</option>
            <option>Vert</option>
            <option>Jaune</option>
            <option>Noir</option>

        </select>
    </div>

    <table>
        <td>
            
            <tr>  <input class="checkbox" type="checkbox" name="tick3" unchecked>
                <label for="tick3">H</label></tr>

            <tr>  <input class="checkbox" type="checkbox" name="tick4" id="tick4" unchecked>
                <label for="tick4">F</label></tr>
            
        </td>
    </table>


<input type="submit" class="btn btn-secondary btn-block" value="Valider" name="Valider">
    
</form>';


?>
           
    

         </div>
<!-- -------------------------------------------------------------------------------------------- -->       
         <div class="col-lg-9 " id="left-column">


        <!-- https://stackoverflow.com/questions/36933107/stretch-image-to-fit-full-container-width-bootstrap -->
        
<?php

            

            $kat = $_SESSION['kat'];

            

            $database = "loremipsum";
            $db_handle = mysqli_connect('localhost', 'root', 'root');
            $db_found = mysqli_select_db($db_handle, $database);
            if($kat==1)
            {
               
                

               

/*-------------------------------------------A FINIR ----------------------------------------------------------------------------------------------*/

               /* 
                echo 'SELECT * FROM articles WHERE';
                if($vet==1) {echo 'Type = 1 ';} 
                if($chau==1) {echo 'Type = 2 ';}  
                if($tc!="") {echo 'AND Taille =  '.$tc;} 
                if($tv!="") {echo 'AND Taille =  '.$tv;} 
                if($h==1) {echo 'AND Sexe = H ';} 
                if($f==1) {echo 'AND Sexe = F ';} */


                
                

          
                if(($vet==0 && $chau == 0) || ($vet==1 && $chau == 1)) 
                    {
                        if ($db_found) {
                        $sql = "SELECT * FROM articles WHERE Type = 1 || Type = 2";
                        }
                        $result = mysqli_query($db_handle, $sql);

                        $temporaryIds = array();
                        $Ids = array();

                        while ($data = mysqli_fetch_assoc($result)) {

                        array_push($Ids,$data['IdArt']);

                }
            }

                if($vet==1 && $chau == 0) 
                    {
                        if ($db_found) {
                        $sql = "SELECT * FROM articles WHERE Type = 1 ";
                        }
                        $result = mysqli_query($db_handle, $sql);

                        $Ids = array();
                        $temporaryIds = array();

                        while ($data = mysqli_fetch_assoc($result)) {

                        array_push($temporaryIds,$data['IdArt']);

                         }


                         
                         for ($i = 0; $i < sizeof($temporaryIds); $i++)
                         {
                            $string="SELECT * FROM vetements WHERE Quantite != 0 AND IdArt = " .$temporaryIds[$i];
                            
                            if($tv != "")
                            $string = $string ." AND Taille = \"" .$tv. "\"";

                            if($h == 1)
                            $string == $string ." AND Sexe = \"H\" ";

                            if($f == 1)
                            $string = $string ." AND Sexe = \"F\" ";

                            if($col != "")
                            $string = $string ." AND Couleur = \"" .$col. "\"";


                             if ($db_found) {
                                $sql = $string;
                             }
         
                             $result = mysqli_query($db_handle, $sql);
                             $data = mysqli_fetch_assoc($result);
                             if($data['IdArt']!="")
                             array_push($Ids,$data['IdArt']);
                         }

                    }   

                    if($vet==0 && $chau == 1) 
                    {
                        if ($db_found) {
                        $sql = "SELECT * FROM articles WHERE Type = 2 ";
                        }
                        $result = mysqli_query($db_handle, $sql);

                        $Ids = array();
                        $temporaryIds = array();

                        while ($data = mysqli_fetch_assoc($result)) {

                        array_push($temporaryIds,$data['IdArt']);

                         }


                         
                         for ($i = 0; $i < sizeof($temporaryIds); $i++)
                         {
                            $string="SELECT * FROM chaussures WHERE Quantite != 0 AND IdArt = " .$temporaryIds[$i];
                            
                            if($tc != "")
                            $string = $string ." AND Taille = \"" .$tc. "\"";

                            if($h == 1)
                            $string == $string ." AND Sexe = \"H\" ";

                            if($f == 1)
                            $string = $string ." AND Sexe = \"F\" ";

                            if($col != "")
                            $string = $string ." AND Couleur = \"" .$col. "\"";


                             if ($db_found) {
                                $sql = $string;
                             }

                             $result = mysqli_query($db_handle, $sql);
                             $data = mysqli_fetch_assoc($result);
                             if($data['IdArt']!="")
                             array_push($Ids,$data['IdArt']);
                         }

                        

                    }  

            
                if(sizeof($Ids) != 0)
                {


                
                for ($i = 0; $i < sizeof($Ids); $i++)
                {
                    if ($db_found) {
                        $sql = "SELECT Im1 FROM multimedia WHERE IdArt = $Ids[$i] ";
                    }

                    $result = mysqli_query($db_handle, $sql);
                    $data = mysqli_fetch_assoc($result);

                    echo '<div class="col-xs-4 col-sm-3 col-md-2 box" name="'.$Ids[$i].'"><a href="product.php"><img src="'.$data['Im1'].'" alt="Pic"></a>
                    <p class=\"HiddenText\">Aperçu</p>
                    </div>';
                }
                

                echo '
                </div>
    
                </div>
             
            </div>
    ';}
            }
   
?>




<?php
        if($kat!=1){
            echo '<div class="container-fluid px-0 pl-5">
       
            <div class="row">
              <div class="col-sm-12 " id="left-column">';

        $kat = $_SESSION['kat'];
        $database = "loremipsum";
        $db_handle = mysqli_connect('localhost', 'root', 'root');
        $db_found = mysqli_select_db($db_handle, $database);

        if($kat==2){

        
            if ($db_found) {
                $sql = "SELECT * FROM articles WHERE Type = 3 ";
            }
    }

    if($kat==3){

        if ($db_found) {
            $sql = "SELECT * FROM articles WHERE Type = 4 ";
        }
    }

    if($kat==4){

        if ($db_found) {
            $sql = "SELECT * FROM articles WHERE Type = 5 ";
        }
    }
        $result = mysqli_query($db_handle, $sql);

        $Ids = array();

        while ($data = mysqli_fetch_assoc($result)) {

        array_push($Ids,$data['IdArt']);

            }

            
            for ($i = 0; $i < sizeof($Ids); $i++)

            {
                if ($db_found) {
                    $sql = "SELECT Im1 FROM multimedia WHERE IdArt = $Ids[$i] ";
                }

                $result = mysqli_query($db_handle, $sql);
                $data = mysqli_fetch_assoc($result);

                echo '<div class="col-xs-4 col-sm-3 col-md-2 box" name="'.$Ids[$i].'"><a href="product.php"><img src="'.$data['Im1'].'" alt="Pic"></a>
                <p class=\"HiddenText\">Aperçu</p>
                </div>';

                

            

            }

        

        echo '
        </div>
           
           </div>
        
       </div>';
    }

?>

  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>




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
