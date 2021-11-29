<!doctype html>
<html>
<head>


<meta charset="UTF-8">
<meta name="author" content="">
<title></title>
<link rel="stylesheet" type="text/css" href="css_kontakt.css" />

</head>
<body>

<div id="kont">		
<!--HEADER-->	
<?php include('includes/header.php')?>
<!--LEWA STRONA-->	
	<div id="kontakt">
			ul. XYZ Miasto
			XX-XXX <br /><br />
			Tel.: (+XX) XXX XXX XXX<br />
			e-mail: xy@xy.com <br /><br />
			Godziny otwarcia: 8-18 <br /><br />
			<img src="obrazy/kontakt_miejsce.jpg" alt="Lokal" class="obrazki"/>
			</div>
				
<!--PRAWA STRONA-->		
		<aside>
			<h3> REJESTRACJA </h3>
			<section class="rejestracja">
			<?php include('kontakt_rejestracja.php'); ?>
			<form class="logowanie" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

			<!--EMAIL-->

				<?php if ($errorEmail != null) { ?>
				
				<span class="warning"><?php echo $errorEmail; ?></span>
					
				<?php } ?>
				
				
				E-mail:<br />
				<input type="text" maxlength=25  size="25" name="email" value="<?php echo $email ?>" /><br /><br />

			<!--HASLO-->


				<?php if ($errorPassword != null) { ?>
				
				<span class="warning"><?php echo $errorPassword; ?></span>
				
				<?php } ?>
				
				
				
				Hasło:<br />
				<input type="text"  maxlength=15 size="25" name="password"value="<?php echo $password ?>" /><br /><br />
					
			<!--REGULAMIN-->

				<?php if ($errorTerms != null) { ?>
								
				<span class="warning"><?php echo $errorTerms; ?></span>
									
				<?php } ?>
				
				
				Akceptuję <a target="blank" href="regulamin.html">regulamin*</a>
				<input type="checkbox"   name="checkbox" /><br /><br />
				
			<!--SUBMIT-->
					
					<input type="submit" name="submit"/><br /><br />
					<!--WYSYLKA MAILA - ERROR	<?php if($emailSent==1)echo "Wyslalismy wiadomosc <br />";  ?> -->
		
					</form>
					</section>
		
		
		<section class="wysylka">
		<form action="" method="post" enctype="multipart/form-data">
			Wyślij swoje zgłoszenie i dołącz do nas <br />	<br />		
			Imię: <br /><input type="text" size="16" name="imie" /> <br /><br />
			Nazwisko: <br /><input type="text" size="16"/> <br /><br />
			Numer kontaktowy: <br /><input type="text" size="16"/> <br /><br />
			Zgłoszenie: &nbsp <input type="file" method="post" name="plik"/><br /><br />
			
			<input type="submit" name="wyslij"/>
			<input type="reset" name="wyczysc"/>
			
			<br />
			<br />
			
			<p class="warning"><?php include('kontakt_wysylka.php'); ?></p>
			
			</form>
			</section>
			</aside>
		<div style="margin-bottom: 70%;"></div>
		<!--STOPKA-->		
	
	<?php include('includes/footer.php')?>
	</div>
	</body>



</html>