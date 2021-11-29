<!doctype html>
<html>
<head>


<meta charset="UTF-8">
<meta name="author" content="Konrad Żywczak">
<meta name="description" content="Kupno i naprawa samochodów używanych"/>
<meta name="keywords" content="kup, sprzedaj, napraw, auto, samochód, serwis, używane"/>
<meta name="copyright" content="Konrad Żywczak" /> <!--RESPONSYWNOSC NA TELEFONIE-->
<title>Serwis aut</title>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="animacja tekstu.css">

</head>
<body>
    <!--HEADER-->
   <?php include("includes/header.php") ?>
    <!-- ARTYKUŁ -->

    
     <article>
     <!--Baza danych -->    <?php  include("includes/scripts/db_connect.php"); ?>
         <?php 
           $sql = "SELECT * FROM auta ORDER BY id";
           $wynik = mysqli_query($idpol, $sql);
           while($auto = mysqli_fetch_array($wynik)){
         echo '<div class="auto">';

               //LEWY 
               echo '<div class="auto_lewy">';
                  echo '<h2>'.$auto['model'].'</h2>';
                  echo '<img class="oferta" src="'.$auto['obrazek'].'"alt="auto" />';
               echo '</div>';
               //SRODEK
               echo '<div class="auto_srodek">';
                  echo '<ul class="srodek">';
                     echo '<li><i class="material-icons" style="font-size: 1.8em; padding-right: 2%;">build</i>Stan: '.$auto['stan'].'</li>';
                     echo '<li><i class="material-icons" style="font-size: 1.8em; padding-right: 2%;">palette</i>Kolor: '.$auto['kolor'].'</li>';
                     echo '<li><i class="material-icons" style="font-size: 1.8em; padding-right: 1%;">location_on</i> Lokalizacja: '.$auto['lokalizacja'].'</li>';
                     echo '<li><i class="material-icons" style="font-size: 1.8em; padding-right: 2%;">local_gas_station</i>Paliwo: '.$auto['paliwo'].'</li>';
                     echo '<li><i class="material-icons" style="font-size: 1.8em; padding-right: 2%;">speed</i>Pojemność silnika: '.$auto['silnik'].'</li>';
                     echo '<li><i class="material-icons" style="font-size: 1.8em; padding-right: 1%;">call_made</i> Rok produkcji: '.$auto['rok'].'</li>';
                     echo '<li><i class="material-icons" style="font-size: 1.8em; padding-right: 2%;">timeline</i>Przebieg: '.$auto['przebieg'].'</li>';
                     echo '<li class="cena"><i class="material-icons" style="font-size: 1.8em; padding-right: 5%;">monetization_on</i>Cena: '.$auto['cena'].'zł</li>';
                  echo '</ul>';
               echo '</div>';
               //PRAWY
               echo '<div class="auto_prawy">';
                  echo $auto['opis'];
               echo '</div>';


         echo '</div>';
         }

         ?>

    
    </article>

    
<!--FOOTER-->
    <?php include("includes/footer.php") ?>

</div>
</body>



</html>