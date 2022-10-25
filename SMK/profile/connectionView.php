<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Se connecter</title>
	<link rel="icon" type="image/png" href="../images/SMK-logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style-commun.css">
	<link rel="stylesheet" type="text/css" href="../style/style-articles.css">
	<link rel="stylesheet" type="text/css" href="../style/formulaires.css">
</head>


<body>
	<div class="blocpage">
	<header> 
		<?php include_once('partie/header_article.php'); ?>
	</header>

		
		<h1 class="titre-page">Connexion</h1>
		<form method="post" action="connectionController.php" class="article">
			<h2 class="titre-article">Connexion</h2>
			<fieldset>
				<?php if (isset($errorMessage)){
					echo($errorMessage);
				}

				if (isset($_SESSION["FIRSTNAME"])){
					echo('Vous êtes connectés!!!'.$_SESSION["FIRSTNAME"].' '.$_SESSION["LASTNAME"]);
				}
				?>
				
				<p>
					<label for="email">Identifiant</label><br/>
					<input type="email" name="email" id="email" placeholder="ex: martinmancheron@exemple.com" autofocus required>
				</p>
				<p>
					<label for="password">Mot de passe</label><br/>
					<input type="password" name="password" id="password" required>
				</p>

				<div class="creation-compte">
					<p>Vous n'avez pas de compte?</p>
					<p>Contactez-nous pour recevoir des identifiants et un mot de passe
						<a href="../article/articleRooter.php?a=contact.php"><i>ici</i></a> ;)
					</p>
				</div>

			   <input type="submit" value="Se connecter">


		   </fieldset>
		</form>
		
	</div>
</body>