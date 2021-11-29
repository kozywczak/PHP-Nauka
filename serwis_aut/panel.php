<!doctype html>
<html>
<head>


<meta charset="UTF-8">
<meta name="author" content="Konrad Żywczak">
<meta name="description" content="Kupno i naprawa samochodów używanych"/>
<meta name="keywords" content="kup, sprzedaj, napraw, auto, samochód, serwis, używane"/>
<meta name="copyright" content="Konrad Żywczak" /> <!--RESPONSYWNOSC NA TELEFONIE-->
<title>AUTO SERWIS</title>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link rel="stylesheet" type="text/css" href="panel.css"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="animacja tekstu.css">

</head>
<body>
    <!--HEADER-->
    <?php 
    session_start();
    if(!isset($_SESSION['zalogowany'])){
        header("location: logowanie.php");
    }
    include("includes/header.php"); 
    

    
    ?>

    <!-- ARTYKUŁ -->
    <div id="kont">
    <h1 class="tytul">Dodawanie nowego auta</h1>
    <form action="includes/scripts/dodawanie.php" method="POST">
        <table>
        <tr>
            <td>Model </td>
            <td><input type="text" name="model" /></td>
        </tr>
        <tr>
        <td>Opis</td>
        <td><textarea name="opis" rows="6" cols="70">
        </textarea></td>
        </tr>
        <tr>
            <td>Zdjęcie</td>
            <td><input type="text" placeholder="obrazy/zdj.jpg" size = "68" name="zdj" /></td>
        </tr>
        <tr>
            <td style="width: 30%; font-size: 80%; text-align: justify;">(ścieżka względna do obrazy/plik.jpg)</td>
        </tr>
        <tr>
            <td>Stan</td>
            <td><input type="text" name="stan" /></td>
        </tr>
        <tr>
            <td>Kolor</td>
            <td><input type="text" name="kolor" /></td>
        </tr>
        <tr>
            <td>Lokalizacja</td>
            <td><input type="text" size = "68" name="lokalizacja" /></td>
        </tr>
        <tr>
            <td style="width: 30%; font-size: 80%; text-align: justify;">(zgodnie z zasadami normalizacji powinna być rozbita na miasto, ulicę, itd. na potrzeby ćwiczeń wpisujemy wyłącznie miasto)</td>
        </tr>
        <tr>
            <td>Paliwo</td>
            <td><input type="text" name="paliwo" /></td>
        </tr>
        <tr>
            <td>Pojemność silnika</td>
            <td><input type="text" name="silnik" /></td>
        </tr>
        <tr>
            <td>Rok produkcji</td>
            <td><input type="text" name="rok" /></td>
        </tr>
        <tr>
            <td>Przebieg</td>
            <td><input type="text" name="przebieg" /></td>
        </tr>
        <tr>
            <td>Cena</td>
            <td><input type="text" name="cena" /></td>
        </tr>
</table>
        <br />
        <input type="submit"  value="Dodaj" onclick="return confirm('Jesteś pewny, że chcesz dodać nowe auto?')"/>
        <input type="reset" value="Wyczyść" onclick="return confirm('Wyczyścisz uzupełnione pola')"/>
    </form>


    <h1 class="tytul">Usuwanie auta</h1>
    <!-- WYPISANIE AUT -->  
    <?php  include("includes/scripts/db_connect.php"); 
    $sql = "SELECT id, model FROM auta ORDER BY id";
    $wynik = mysqli_query($idpol, $sql);
    while($auto = mysqli_fetch_array($wynik)){
    echo $auto['id'].'. '.$auto['model'].'<a href="includes/scripts/delete.php?id='.$auto['id'].'"><i class="material-icons">delete</i></a>'.'<br />';
    }       
             
     ?>


</div>
    <!--FOOTER-->
    <?php include("includes/footer.php") ?>



</div>
</body>



</html>