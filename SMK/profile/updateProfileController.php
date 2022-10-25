<?php 
session_start();

$userDatas = $_SESSION;
$postDatas = $_POST;

if (isset($postDatas['ppassword'])){
    try{
        if (isset($postDatas['password1']) && isset($postDatas['password2'])){
            if ($postDatas['password1'] === $postDatas['password2']){
                require_once('updateProfileModel.php');
                update_profile($postDatas);
                header('Location:myAccountController.php');
            }
            else{
                throw new Exception('Les mots de passe ne correspondent pas');
            }
        }
        else{
            throw new Exception('Champs manquants');
        }
    }
    catch(Exception $e){
        $errorMessage = $e->getMessage();
        require_once('updateProfileView.php');
    }
}

else{
    require_once('updateProfileView.php');
}

//Ajouter une modification de l'email et une option mot de passe oublié