<?php


    $data = $_POST['IdAr'];
    $data1 = $_POST['kat'];

    $vet = $_POST['vet'];
    $chau = $_POST['chau'];
    $taille = $_POST['taille'];
    $coul = $_POST['coul'];
    $h = $_POST['h'];
    $f = $_POST['f'];

    session_start();
    $_SESSION['IdArt'] = $data;
    $_SESSION['kat'] = $data1;

    $_SESSION['vet'] = $vet;
    $_SESSION['chau'] = $chau;
    $_SESSION['taille'] = $taille;
    $_SESSION['coul'] = $coul;
    $_SESSION['h'] = $h;
    $_SESSION['f'] = $f;


?>