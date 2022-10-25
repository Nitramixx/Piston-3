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
    <title>Création d'un compte</title>
</head>
<body>
<div class="blocpage">
	<header> 
		<?php include_once('partie/header_article.php'); ?>
	</header>

		
		<h1 class="titre-page">Création compte</h1>
		<form method="post" action="creationAccountController.php" class="article">
			<h2 class="titre-article">Création d'un nouveau compte</h2>
			<fieldset>
				<?php if (isset($errorMessage)){
					echo($errorMessage);
				}?>

				<p>
                    <p>Nouveau compte pour un :</p> <br>

                    <input type="radio" id="CP" class='statute' name="statute" value="CP">
                    <label for="CP">Nouveau CP</label><br>
                    <input type="radio" id="reporter" class='statute' name="statute" value="RP">
                    <label for="reporter">Nouveau Reporter de patrouille</label><br>
                    <p><i>*Pour un CP ou un reporter il est conseillé de donner le nom de la patrouille et non du CP pour le réutiliser pour les reporter suivant*</i></p>
                    <input type="radio" id="scout" class='statute' name="statute" value="S">
                    <label for="scout">Nouveau Scout</label><br>
                    <input type="radio" id="parent" class='statute' name="statute" value="P">
                    <label for="parent">Nouveau Parent</label><br>
                    <input type="radio" id="visiteur" class='statute' name="statute" value="V">
                    <label for="visiteur">Nouveau Visiteur</label>
				</p>
				<p>
					<input type="hidden" name="statutehidden" id="statutehidden" value='<?= $fillDatas['statute'] ?>' readonly>
				</p>
				<p>
					<label for="patrol"><i>Patrouille</i></label><br/>
					<input type="text" name="patrol" id="patrol" placeholder="ex: Puma" required value='<?=$fillDatas['patrol'] ?>'>
				</p>
				<p>
					<label for="email">Email</label><br/>
					<input type="email" name="email" id="email" placeholder="ex: martinmancheron@exemple.com" required value='<?= $fillDatas['email'] ?>'>
				</p>
				<p>
					<label for="password"><i>Mot de passe(8 caractères minimum, avec au moins 1 majuscule, 1 symbole et un chiffre...)</i></label><br/>
					<input type="text" name="password" id="password" placeholder="ex: e7Za{+8ZD?Ke" required value='<?=$fillDatas['password'] ?>'>
				</p>
                <p>
					<label for="fname">Prénom</label><br/>
					<input type="text" name="fname" id="fname" placeholder="ex: Martin" required value='<?=$fillDatas['fname'] ?>'>
				</p>
                <p>
					<label for="lname">Nom</label><br/>
					<input type="text" name="lname" id="lname" placeholder="ex: Mancheron" required value='<?=$fillDatas['lname'] ?>'>
				</p>



			   <input type="submit" value="Créer le compte">
			   <button><a href="../menu.php">Annuler</a></button>


		   </fieldset>
		</form>
		
	</div>
	<script type="text/javascript" src="./../javascript/creation_account.js"></script>

</body>
</html>