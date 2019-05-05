<?php


    $data = $_POST['IdAr'];
    $data1 = $_POST['kat'];

    session_start();
    $_SESSION['IdArt'] = $data;
    $_SESSION['kat'] = $data1;



?>