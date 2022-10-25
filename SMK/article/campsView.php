<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Les camps</title>
	<link rel="icon" type="image/png" href="../assets/images/SMK-logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style-commun.css">
	<link rel="stylesheet" type="text/css" href="../style/style-articles.css">
	<link rel="stylesheet" type="text/css" href="../style/formulaires.css">
	<link rel="stylesheet" type="text/css" href="../style/style-camps.css">

</head>

<body>
<div class='blocpage'>
	<header>
		<?php include_once('partie/header_article.php'); ?> 
	</header>

	<article>
	<?php require_once("addCampsController.php"); ?>

		<h1 class='titre-page'>Les camps à Saint-Max</h1>
		<?php foreach($camps as $camp): ?>
	
			<div class="article">
				<h2 class="titre-article"><?= $camp['title']?></h2>
				
				<div class="informations">
					<div class='video-container'>
					<iframe width="100%" height="100%"
						src="https://www.youtube.com/embed/<?= $camp['link']?>" class='video'>
					</iframe>
					</div>

					<div class='pdf-container'>
						<iframe
							src="../assets/camps/<?=$camp['description']?>.pdf" class='pdf'>
						</iframe>
					</div>

					<?php if ($_SESSION['STATUTE']=='RT'):?>
						<form action="campController" action='post'>
								<input type="hidden" name='id' value='<?=$camp['id'];?>'>
								<a href="#" class='delete_camp'>supprimer</a>
								<a href="#" class='update_camp'>modifier</a>
								
								<div class='delete_confirmation_block' style='display:none;'>
									<a href="campController.php?action=delete&id=<?=$camp['id'];?>">Supprimer</a>
									<a href="#" class='annul_deleting'>Annuler</a>
								</div>
								<div class='update_confirmation_block' style='display:none;'>
									<input type="submit" class='update_user_confirmation' value='modifier'>
									<a href="#" class='annul_updating'>Annuler</a>
								</div>
						<?php endif ?>
							</form>

				</div>
			</div>

		<?php endforeach ?>
		

		

	</article>
</div>

</body>