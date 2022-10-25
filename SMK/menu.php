<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SMK</title>
	<link rel="icon" type="image/png" href="images/SMK-logo.png">
	<link rel="stylesheet" type="text/css" href="style/style-commun.css">
	<link rel="stylesheet" type="text/css" href="style/style-menu.css">
</head>

<body>
	<div class="blocpage">
		<header>
			<div id="titre-site">
				<h1><span class="majuscule">S</span>aint 
				<span class="majuscule">M</span>aximilien 
				<span class="majuscule">K</span>olbe</h1>
				<p>XI - SUF Versailles</p>
			</div>
			
			<nav>
				<ul id="navigation">
					<li><a href="article/articleRooter.php?a=histoire.php" class="button_navigation">Histoire</a></li>
					<li><a href="article/articleRooter.php?a=troupe.php" class="button_navigation">La Troupe</a></li>
					<li><a href="article/articleRooter.php?a=campsController.php" class="button_navigation">Les camps</a></li>
					<li><a href="article/articleRooter.php?a=contact.php" class="button_navigation">Contact</a></li>
					<?php if (!isset($_SESSION['FIRSTNAME'])):?>
					<li><a href="profile/connectionController.php" class="button_navigation">Connexion</a></li>
					<?php else: ?>
					<li><a href="profile/myAccountController.php" class="button_navigation">Mon compte</a></li>
					<? endif ?>
				</ul>
			</nav>
		</header>


		<article>

				<br>

				<!-- The dots/circles -->
				<div style="text-align:center">
			  	<span class="dot" onclick="currentSlide(1)"></span>
			  	<span class="dot" onclick="currentSlide(2)"></span>
			  	<span class="dot" onclick="currentSlide(3)"></span>
				</div>
				<br>
						<!-- Slideshow container -->
				<div class="slideshow-container">

			  	<!-- Full-width images with number and caption text -->
			  	<div class="mySlides fade">
			   		<div class="numbertext">1 / 3</div>
			    	<img src="images/mat.jpg" style="width:100%">
			    	<div class="text">Mat 2021</div>
			  	</div>

			  	<div class="mySlides fade">
			    	<div class="numbertext">2 / 3</div>
			    	<img src="images/camps2020.jpg" style="width:100%">
			    	<div class="text">Camps 2019</div>
			  	</div>

			  	<div class="mySlides fade">
			    	<div class="numbertext">3 / 3</div>
			    	<img src="images/map_2021.jpg" style="width:100%">
			    	<div class="text">Carte de je ne sais pas où</div>
			  	</div>

			  	<!-- Next and previous buttons -->
			  	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			  	<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
		</article>
<!--Modifier pour que la pop up n'apparaisse qu'une seule fois
Ou même modifier pour que ce ne soit pas une pop up mais autrte chose-->
<script type="text/javascript" src="javascript/menu.js"></script>
<?php if (isset($_SESSION['FIRSTNAME']) && isset($_SESSION['LASTNAME'])): ?>
<script>window.alert("<?= ('Bienvenue '.$_SESSION['FIRSTNAME'].' '.$_SESSION['LASTNAME']).'Vous êtes '.$_SESSION['STATUTE']; ?>") </script>
<?php endif ?>

<p>ab</p>

<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>
<p>ab</p>


</body>
</html>


