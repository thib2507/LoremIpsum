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

        <!-- https://stackoverflow.com/questions/36933107/stretch-image-to-fit-full-container-width-bootstrap -->
        
                <?php

            

            $kat = $_SESSION['kat'];

            $vet = $_SESSION['vet'];
            $chau = $_SESSION['chau'] ;
            $taille = $_SESSION['taille'];
            $coul = $_SESSION['coul'];
            $h = $_SESSION['h'];
            $f = $_SESSION['f'];

            $database = "loremipsum";
            $db_handle = mysqli_connect('localhost', 'root', 'root');
            $db_found = mysqli_select_db($db_handle, $database);
            if($kat==1)
            {

                echo '<div class="ontainer-fluid px-0 pl-5">
       
            <div class="row">
              <div class="col-lg-3 " id="left-column">

              <table><td>';

                if($vet==0)
                {
                    echo '<tr>  <input class="checkbox" type="checkbox" id="tick1" unchecked>
                    <label for="tick1">Vêtements</label></tr>';
                }

                if($vet==1)
                {
                    echo '<tr>  <input class="checkbox" type="checkbox" id="tick1" checked>
                    <label for="tick1">Vêtements</label></tr>';
                }

                if($chau==0)
                {
                    echo '<tr>  <input class="checkbox" type="checkbox" id="tick2" unchecked>
                    <label for="tick2">Chaussures</label></tr>';
                }

                if($chau==1)
                {
                    echo '<tr>  <input class="checkbox" type="checkbox" id="tick2" checked>
                    <label for="tick2">Chaussures</label></tr>';
                }
              
              

             
              echo '</td></table>

              <p>Tailles:</p>

              <div class="form-group">
                    <select class="form-control" id="Taille" placeholder="Taille">;
                        <option> </option>
                    
                    </select>
             </div>

             <p>Couleur:</p>

            <div class="form-group">
                <select class="form-control" id="Taille" placeholder="Taille">;
                    <option> </option>
                
                </select>
            </div>

            <table><td>
              
              <tr>  <input class="checkbox" type="checkbox" id="tick3" unchecked>
                    <label for="tick3">H</label></tr>

             <tr>  <input class="checkbox" type="checkbox" id="tick4" unchecked>
                    <label for="tick4">F</label></tr>
              
              </td></table>



              </div>
            
              <div class="col-lg-9 " id="left-column">
';


            if ($db_found) {
                $sql = "SELECT * FROM articles WHERE Type = 1 || Type=2 ";
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
             
            </div>
    ';
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

  $(".checkbox").click(function(){
    var id=$(this).attr("id");
    
    if(id=="tick1")
    {
        if($('.checkbox').is(':disabled'))
    		{
                $.ajax({
                url: "session.php", 
                type : 'POST', 
                data : { 
                vet: 0, kat: 1
                },
                success: function(result){
                
                }});
    		}

		else
		{
			$.ajax({
                url: "session.php", 
                type : 'POST', 
                data : { 
                vet: 1, kat: 1
                },
                success: function(result){
                
                }});
		}

        location.reload();

        

    }

    if(id=="tick2")
    {
        if($('.checkbox').is(':disabled'))
    		{
                $.ajax({
        url: "session.php", 
        type : 'POST', 
        data : { 
        chau: 0, kat: 1
        },
        success: function(result){
        
        }});
    		}

		else
		{
			$.ajax({
                url: "session.php", 
                type : 'POST', 
                data : { 
                chau: 1, kat: 1
                },
                success: function(result){
                
                }});
		}

        location.reload();

        

    }

    if(id=="tick3")
    {
        if($('.checkbox').is(':disabled'))
    		{
                $.ajax({
        url: "session.php", 
        type : 'POST', 
        data : { 
        h: 0, kat: 1
        },
        success: function(result){
        
        }});
    		}

		else
		{
			$.ajax({
                url: "session.php", 
                type : 'POST', 
                data : { 
                h: 1, kat: 1
                },
                success: function(result){
                
                }});
		}

        location.reload();
    }

    if(id=="tick4")
    {
        if($('.checkbox').is(':disabled'))
    		{
                $.ajax({
        url: "session.php", 
        type : 'POST', 
        data : { 
        f: 0, kat: 1
        },
        success: function(result){
        
        }});
    		}

		else
		{
			$.ajax({
                url: "session.php", 
                type : 'POST', 
                data : { 
                f: 1, kat: 1
                },
                success: function(result){
                
                }});
		}

        location.reload();

    }
    


  });

  








});


</script>

</body>
</html>
