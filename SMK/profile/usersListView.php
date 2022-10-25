<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Un peu d'histoire</title>
	<link rel="icon" type="image/png" href="../assets/images/SMK-logo.png">
	<link rel="stylesheet" type="text/css" href="../style/style-commun.css">
	<link rel="stylesheet" type="text/css" href="../style/style-articles.css">
	<link rel="stylesheet" type="text/css" href="../style/formulaires.css">
	<link rel="stylesheet" type="text/css" href="../style/users_list.css">
	
</head>


<body>
	<div class="blocpage">
		<header>
			<?php include_once('partie/header_article.php'); ?>
		</header>

		<article>
			<div class='users-list'>
			<h2 class='titre-article'>Liste des utilisateurs</h2>

			<table>
				<tr>
					<th>Nom</th>
					<th>Prénom</th>
					<th>Email</th>
					<th>Patrouille</th>
					<th>Statut</th>
				</tr>
				<?php foreach($users as $user) : ?>
					<form action="usersListController.php" method='post'>
						<tr class='user_datas'>
							<td> <input type="text" name='lastname' value='<?=$user['lastname'];?>' readonly required></td>
							<td> <input type="text" name='firstname'  value='<?=$user['firstname'];?>' readonly required></td>
							<td> <input type="email" name='email'  value='<?=$user['email'];?>' readonly required></td>
							<td> <input type="text" name='patrol'  value='<?=$user['patrol'];?>' readonly required></td>
							<td> <input type='text' list='statutes' name='statute' value='<?=$user['statute'];?>' readonly required>
								<datalist id='statutes'>
									<option value="CT"></option>
									<option value="CP"></option>
									<option value="RP"></option>
									<option value="S"></option>
									<option value="P"></option>
									<option value="V"></option>
								</datalist>
							</td>
							<input type="hidden" name='user_id' value='<?=$user['user_id'];?>'>
							<td><a href="#" class='delete_user'>supprimer</a></td>
							<td><a href="#" class='update_user'>modifier</a></td>
							
							<td class='delete_confirmation_block' style='display:none;'>
								<a href="usersListController.php?action=delete&id=<?=$user['user_id'];?>">Supprimer</a>
								<a href="#" class='annul_deleting'>Annuler</a>
							</td>
							<td class='update_confirmation_block' style='display:none;'>
								<input type="submit" class='update_user_confirmation' value='modifier'>
								<a href="#" class='annul_updating'>Annuler</a>
							</td>
						</tr>
					</form>

				<?php endforeach; ?>
			</table>

			<li><a href="creationAccountController.php" id='n_user'>Créer un nouveau compte</a></li>
			

			</div>
		</article>
	</div>
	
	<script type="text/javascript" src="../javascript/usersList.js"></script>
</body>
</html>