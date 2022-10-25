<?php
session_start();

include_once("../datas/users.php");

$connexionData = $_POST;

if (!isset($_SESSION['FIRSTNAME'])){
	if (isset($connexionData['email'])){
		foreach($users as $user){
			if ($user['email'] === $connexionData['email']){
				if ($user['password'] === $connexionData['password']){
					$_SESSION['FIRSTNAME'] = $user['firstname'];
					$_SESSION['LASTNAME'] = $user['lastname'];
					$_SESSION['EMAIL'] = $user['email'];
					$_SESSION['STATUTE'] = $user['statute'];
					header('Location:../menu.php');
				}
				else{
					$errorMessage = "Mot de passe invalide";
				}
			}
			else{
				$errorMessage = "Adresse mail introuvable";
			}
		}
	}
}

require('connectionView.php');