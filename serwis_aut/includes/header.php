<!--HEADER-->
<header>

<script src="jquery.js"></script>
<script>
    $(document).ready(function(){
	$("#menu1, #menu2, #menu3").mouseover(
	function(){
		$(this).css('color', 'black');
	})
    
	$("#menu1, #menu2, #menu3").mouseout(
	function(){
		$(this).css('color', 'white');
	})
    
    
})

</script>
        <ul class="menu_header">
            <li class="menu_header"><a id="menu1" class="header" href="index.php"><i class="material-icons" style="font-size: 1.2em; padding-right: 2%; line-height: 170%; ">home</i>STRONA GŁÓWNA</a></li>
            <li class="menu_header"><a id="menu2" class="header" href="kontakt.php"><i class="material-icons" style="font-size: 1.2em; padding-right: 2%; line-height:  170%;">local_phone</i>KONTAKT</a></li>
            <li class="menu_header"><a id="menu3" class="header" href="logowanie.php"><i class="material-icons" style="font-size: 1.2em; padding-right: 2%; line-height:  200%;">person</i>PANEL ADMINISTRATORA</a></li>
            <li class="menu_header"><a class="header" href="index.php"><img src="obrazy/logo_header.png" style="width: 90%; margin-top: 8%;"/></a></li>
            <li class="menu_header" style="padding: 4% 0 0 3%; color: white; font-size: 1.8em;">AUTO-SERWIS</li>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <?php
            if(isset($_SESSION['zalogowany'])){
                echo "<li class='menu_header' style='padding: 6% 0 0 8%;'><input type='submit' value='WYLOGUJ SIĘ' name='wyloguj' style='background-color: black; width: 70%; color: white; font-size: 140%'></li>";
                    if(isset($_POST['wyloguj'])){
                        session_destroy();
                        header("location: index.php");
                    }
            }
            ?>
            </form>

        </ul>
        
        
    </header>
    <h1 class="baner"></h1>