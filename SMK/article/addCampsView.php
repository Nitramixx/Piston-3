<h1 class="titre-page">Ajouter un camp</h1>
		<form method="post" action="addCampsController.php" class="article" enctype="multipart/form-data">
			<h2 class="titre-article">Ajouter un nouveau camp</h2>
			<fieldset>
				<?php if (isset($errorMessage)){
					echo($errorMessage);
				}?>

				<p>
					<label for="title">Titre</label><br/>
					<input type="text" name="title" id="title" required>
				</p>
				<p>
					<label for="adress">Adresse de la vidéo YouTube <br> https://www.youtube.com/watch?v=</label>
					<input type="text" name="link" id="link" placeholder="ex: VfQt_fNRHUw" required>
				</p>
				<p>
					<label for="description">Description du camps (au format pdf)</label>
					<input type="file" id="description" name="description" required>
				</p>
 				
			   <input type="submit" value="Créer le camp">

		   </fieldset>
		</form>