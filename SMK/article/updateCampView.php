<h1 class="titre-page">Modifier le camp</h1>
		<form method="post" action="addCampsController.php" class="article" enctype="multipart/form-data">
			<h2 class="titre-article">Modifier le camp</h2>
			<fieldset>
				<?php if (isset($errorMessage)){
					echo($errorMessage);
				}?>

				<p>
					<label for="title">Titre</label><br/>
					<input type="text" name="title" id="title" required value='<?= $title ?>'>
				</p>
				<p>
					<label for="adress">Adresse de la vidéo YouTube <br> https://www.youtube.com/watch?v=</label>
					<input type="text" name="link" id="link" value='<?= $title ?>' required>
				</p>
				<p>
					<label for="description">Description du camps (au format pdf) <br>
                Si tu ne veux pas modifier ce champ là, tu peux télécharger le pdf du site, puis le rentrer dans le formulaire.</label>
					<input type="file" id="description" name="description" required>
				</p>
 				
			   <input type="submit" value="Créer le camp">

		   </fieldset>
		</form>