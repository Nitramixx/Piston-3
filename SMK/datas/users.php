<?php

include_once('mysql.php');

//Récupérer tous les utillisateurs
$mysqlQuery = 'SELECT * FROM users';
$usersStatement = $mysqlClient -> prepare($mysqlQuery);
$usersStatement -> execute();
$users = $usersStatement -> fetchAll();
