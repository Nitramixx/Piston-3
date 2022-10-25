<?php

function create_account(array $datas) {

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=smk;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $sqlQuery = "INSERT INTO users(email, password, firstname, lastname, statute, patrol) VALUES (:email, :password, :firstname, :lastname, :statute, :patrol)";

    $insertUser = $db->prepare($sqlQuery);

    $insertUser->execute([
        'email' => $datas['email'],
        'password' => $datas['password'],
        'firstname' => $datas['fname'],
        'lastname' => $datas['lname'],
        'statute' => $datas['statute'],
        'patrol' => $datas['patrol']
    ]);
}
