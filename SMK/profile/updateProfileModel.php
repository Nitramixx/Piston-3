<?php

function update_profile(array $datas) {

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=smk;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $sqlQuery = "UPDATE users SET password = :password WHERE email = :email";

    $updateUser = $db->prepare($sqlQuery);

    $updateUser->execute([
        'password' => $datas['password1'],
        
        'email' => $_SESSION['EMAIL']
    ]);

}