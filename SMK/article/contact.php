<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nous contacter</title>
	<link rel="icon" type="image/png" href="../assets/images/SMK-logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style-commun.css">
	<link rel="stylesheet" type="text/css" href="../style/style-articles.css">
	<link rel="stylesheet" type="text/css" href="../style/formulaires.css">
</head>


<body>
	<div class="blocpage">
	<header> <?php include_once('partie/header_article.php'); ?></header>

		<h1 class="titre-page">Contact</h1>
		<form method="post" action="#" class="article">
			<h2 class="titre-article">Formulaire de contact</h2>
			<fieldset>
				<p>
					<label for="fname">Nom</label><br/>
					<input type="text" name="fname" id="fname" placeholder="ex: Mancheron" autofocus required>
				</p>
				<p>
					<label for="lname">Prénom</label><br/>
					<input type="text" name="lname" id="lname" placeholder="ex: Martin" required>
				</p>

				<p>
					<label for="e-mail">E-mail</label><br/>
					<input type="email" name="email" id="email" required>
				</p>

				<p>
			       <label for="ameliorer">Votre message ?</label><br/>
			       <textarea name="ameliorer" id="ameliorer"></textarea>
			   </p>

			   <input type="submit" value="Envoyer">
		   </fieldset>
		</form>
	</div>
</body>