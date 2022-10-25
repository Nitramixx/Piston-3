<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/SMK-logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style-commun.css">
	<link rel="stylesheet" type="text/css" href="../style/style-articles.css">
	<link rel="stylesheet" type="text/css" href="../style/formulaires.css">
    <title>Validation...</title>
</head>
<body>
<div class="blocpage">
	<header> 
		<?php include_once('partie/header_article.php'); ?>
	</header>

		
		<h1 class="titre-page">Validation...</h1>

			<article class='article'>


				<form action="CreationAccountController.php" method='post'>
					<label for="lname">Nom</label>
					<input type="text" name='lname' value='<?= $creationDatas['lname'] ?>' readonly>
					<label for="fname">Prénom</label>
					<input type="text" name='fname' value='<?= $creationDatas['fname'] ?>' readonly>
					<label for="email">Email</label>
					<input type="text" name='email' value='<?= $creationDatas['email'] ?>' readonly>
					<label for="password">Mot de passe</label>
					<input type="text" name='password' value='<?= $creationDatas['password'] ?>' readonly>
					<label for="patrol">Patrouille</label>
					<input type="text" name='patrol' value='<?= $creationDatas['patrol'] ?>' readonly>
					<label for="statute">Statut</label>
					<input type="text" name='statute' value='<?= $creationDatas['statute'] ?>' readonly id='statut'>
					<input type="submit" name='validate' value='Valider'>
					<input type="submit" name='cancel' value='Annuler'>

				</form>
			</article>
		
	</div>
</body>
</html>