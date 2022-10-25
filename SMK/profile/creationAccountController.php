<?php
session_start();


//Si il a le droit d'être là
if (isset($_SESSION['STATUTE']) && $_SESSION['STATUTE'] === 'RT'){
    $fillDatas = [
        'statute' => '',
        'email' => '',
        'patrol' => '',
        'password' => generate_password(8),
        'fname' => '',
        'lname' => ''
    ];
    $configuration = 0;
    
    //Si le RT est retourné en arrière pour modifier un champ, ou a validé le compte, on enregistre les données
    if (isset($_POST['cancel']) || isset($_POST['validate'])){
        $confirmationDatas = $_POST;
        $fillDatas = $confirmationDatas;
        $configuration = 2;
    }
    
    //Si le RT vient de remplir le formulaire et de 'créer le compte' une première fois
    elseif (isset($_POST['email'])){
        $creationDatas = $_POST;
        $fillDatas = $creationDatas;
        $configuration = 1;
    }

    include_once('../datas/users.php');
    
    //si il a déjà rempli le formulaire : on vérifie la présence et la cohérence des données
    if ($configuration === 1){
        try{
            if (isset($creationDatas['email'])){
                foreach ($users as $user){
                    if ($user['email'] === $creationDatas['email']){
                        throw new Exception('Email déjà existant !');
                    }
                }
            }

            if (isset($creationDatas['email']) &&
                isset($creationDatas['fname']) &&
                isset($creationDatas['lname']) &&
                isset($creationDatas['patrol'])){
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$creationDatas['fname']) || !preg_match("/^[a-zA-Z-' ]*$/",$creationDatas['lname']) || !preg_match("/^[a-zA-Z-' ]*$/",$creationDatas['patrol'])) {
                        throw new Exception('Seuls les lettres et les espaces sont autorisés pour la patrouille, le nom et le prénom');
                    }
                    if (!filter_var($creationDatas['email'], FILTER_VALIDATE_EMAIL)) {
                        throw new Exception('Email invalide');
                      }
                    $creationDatas['patrol'] = ucfirst(strtolower($creationDatas['patrol']));
                }
             
           
            if (isset($creationDatas['statute']) &&
                isset($creationDatas['patrol']) &&
                isset($creationDatas['email']) &&
                isset($creationDatas['password']) &&
                isset($creationDatas['fname']) &&
                isset($creationDatas['lname'])){
                    require('postCreationAccountView.php');
                }
            else{
                throw new Exception('Champ(s) manquant(s) !');
            }
        }
        
        catch(Exception $e){
            $errorMessage = $e->getMessage();
            require_once('creationAccountView.php');
        }
    }
    
    //S'il a validé ou annulé le compte (après l'avoir 'créer' une première fois)
    elseif ($configuration === 2){
        if (isset($confirmationDatas['validate'])){
            require('creationAccountModel.php');
            create_account($confirmationDatas);
            header('Location:usersListController.php');
        }
        else{
            require('creationAccountView.php');
        }
    }
    
    //s'il n' a pas encore rempli le formulaire
    else{
        require_once('creationAccountView.php');
    }

}

//Si le visiteur n'est pas censé être connecté à cette page
else{
    header('Location:../menu.php');
}

function generate_password(int $len) : string
{
    $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890+-*/.,;:!?';
    $pass =''; 
    $combLen = strlen($comb) - 1; 
    for ($i = 0; $i < $len; $i++) {
        $n = rand(0, $combLen);
        $pass .= $comb[$n];
    }
    while (!validate_password($pass)){
        $comb = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890+-*/.,;:!?';
        $pass =''; 
        $combLen = strlen($comb) - 1; 
        for ($i = 0; $i < $len; $i++) {
            $n = rand(0, $combLen);
            $pass .= $comb[$n];
        }
    }
    return($pass); 
}

function validate_password(string $pass) : bool
{
    return true;
}
