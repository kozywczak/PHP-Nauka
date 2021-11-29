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

</head>
<body>
    <!--HEADER-->
    <?php include("includes/header.php") ?>

    <!-- ARTYKUŁ -->
    <h1 style="text-align: center; margin-top: 2%; color: rgb(57, 57, 131);">STRONA W TRAKCIE BUDOWY - NIE PRZEDSTAWIA OSTATECZNEGO WYGLĄDU GRAFICZNEGO</h1>

    <div id="logowanie">
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login"/>
        (admin)
        <br />
        <br />
        Hasło: <input type="password" name="haslo"/>
        (admin)
        <br />
        <br />
        <input type="submit" value="Zaloguj się" name="submit"/>
    



        <?php include("includes/scripts/db_connect.php");
        session_start();
        if(isset($_SESSION['zalogowany'])){
            header("location: panel.php");
        }
        if(isset($_POST['submit'])){
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        if($login == "admin" AND $haslo == "admin"){
            $_SESSION["zalogowany"] = true;
            header("location: panel.php");
        }
        else{
            echo "ZŁE HASŁO LUB LOGIN";
        }
    }
    ?>

    </form>

    </div>
    <!--FOOTER-->
    <?php include("includes/footer.php") ?>



</div>
</body>



</html>