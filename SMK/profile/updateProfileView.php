<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mon profil</title>
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

		
		<h1 class="titre-page">Modifier mon profil</h1>
		<form method="post" action="updateProfileController.php" class="article">
			<h2 class="titre-article">Modification de mon mot de passe :</h2>
			<fieldset>
                <?php if (isset($errorMessage)){
                    echo($errorMessage);
                }
                ?>
				
				<p>
					<label for="ppassword">Mot de passe actuel</label><br/>
					<input type="password" name="ppassword" id="ppassword" required>
				</p>
                <p>
					<label for="password1">Nouveau mot de passe</label><br/>
					<input type="password" name="password1" id="password1" required>
				</p>
                <p>
					<label for="password2">Confirmation de mon nouveau mot de passe</label><br/>
					<input type="password" name="password2" id="password2" required>
				</p>


			   <input type="submit" value="Valider">


		   </fieldset>
		</form>
		
	</div>
</body>