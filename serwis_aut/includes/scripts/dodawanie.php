<?php include("db_connect.php");

$model	= $_POST['model'];
$opis	= $_POST['opis'];
$zdj = $_POST['zdj'];
$stan	= $_POST['stan'];
$kolor	= $_POST['kolor'];
$lokalizacja	= $_POST['lokalizacja'];
$paliwo	= $_POST['paliwo'];
$silnik	= $_POST['silnik'];
$rok	= $_POST['rok'];
$przebieg	= $_POST['przebieg'];
$cena	= $_POST['cena'];

$sql = "INSERT INTO auta(obrazek, opis, model, stan, przebieg, lokalizacja, cena, paliwo, rok, silnik, kolor) 
VALUES ('$zdj','$opis','$model','$stan','$przebieg','$lokalizacja', '$cena', '$paliwo', '$rok', '$silnik', '$kolor')";
mysqli_query($idpol, $sql);
header("location: ../../index.php");




?>
