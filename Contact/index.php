<?php
error_reporting(0);
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="../photos/icon.png" type="image/icon type">
		<title>Walker's P&I Design - Kontakt</title>
		<link rel="stylesheet" href="../css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	</head>
	<body style="background-image: url(../photos/tlo.png)">
		<nav class="menu">
			<a href="#" class="logo"><img src="../photos/logo.png" alt="logo serwisu" class="logo"/></a>
			<ul class="menu-items">
				<li class="item"><a href="../index.html" class="item">Home</a></li>
				<li class="item"><a href="../About/index.html" class="item">ABOUT</a></li>
				<li class="item"><a href="../Houses/index.html" class="item">Houses</a></li>
				<li class="item-active"><a href="#" class="item-active">Contact</a></li>
			</ul>
		</nav>
		<section class="formwrapper">
		    <form action="contactaction.php" method="post" class="formularz">
		        E-MAIL<br>
		        <input type="text" placeholder="Link do profilu na forum" name="customer_email">
		          <br><br>IMIĘ<br>
		        <input type="text" placeholder="Imię IC" name="customer_name">
		        <br><br>NAZWISKO<br>
		        <input type="text" placeholder="Nazwisko IC" name="customer_surname">
		        <br><br>TEMAT<br>
		        <input type="text" placeholder="Temat" name="contact_topic">
		        <br><br>TREŚĆ<br>
		        <textarea name="contact_content" id="contact_content" cols="30" rows="10" placeholder="Wpisz tutaj treść swojej wiadomości" maxlength="490"></textarea>
		        <?php 
                echo $_SESSION['somethingwrong'];
                ?>
		        <br><input type="submit" value="Wyślij formularz">
		    </form>
		</section>
	</body>
</html>