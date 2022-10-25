<!DOCTYPE html>
<html lang="fr ">
<head>
    <meta charset="UTF-8">
    <title>Mon compte</title>
    <link rel="icon" type="image/png" href="../assets/images/SMK-logo.png">
    <link rel="stylesheet" type="text/css" href="../style/style-commun.css">
	<link rel="stylesheet" type="text/css" href="../style/style-articles.css">
    <link rel="stylesheet" type="text/css" href="../style/my-account.css">

</head>
<body>
    <div class='blocpage'>
    <header>    
        <?php include_once('partie/header_article.php'); ?>
    </header>

        <a href="disconnection.php" id='disconnection-button'>SE DECONNECTER</a>
        <h1 class='titre-page'>Mon compte</h1>


    <article>

        <div class="article">
		    <h2 class="titre-article">Mes informations</h2>
			<div class="informations">
                <table>
                    <tr>
                        <th>Nom</th>
                        <td><?= $_SESSION['LASTNAME'];?></td>
                    </tr>
                    <tr>
                        <th>Prénom</th>
                        <td><?= $_SESSION['FIRSTNAME'];?></td>
                    </tr>
                    <tr>
                        <th>Adresse mail</th>
                        <td><?= $_SESSION['EMAIL'];?></td>
                    </tr>
                </table>

                <a href="updateProfileController.php">MODIFIER MON PROFIL</a>
            </div>
        </div>

        <div class="article">
		    <h2 class="titre-article">Les fonctionalités liées  mon statut</h2>
			<div class="informations">
                <ul>
                    <!--Reporter de troupe-->
                    <?php if($_SESSION['STATUTE'] === 'RT'): ?> 
                        <li><a href="usersListController.php">Liste des utilisateurs</a></li>
                    <?php endif ?>

                    <!--Chef de patrouille-->
                    <?php if($_SESSION['STATUTE'] === 'RT'): ?> 
                        <li><a href="myTrunkController.php">Liste des utilisateurs</a></li>
                    <?php endif ?>
                </ul>

                <a href="updateProfileController.php">MODIFIER MON PROFIL</a>
            </div>
        </div>
    </article>

    </div>

    
    
</body>
</html>