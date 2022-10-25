<?php

function data_base(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=smk;charset=utf8', 'root', 'root');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function get_users_list() : array {
    
    $db = data_base();

    $sqlQuerry = 'SELECT * FROM users';

    $usersStatement = $db->prepare($sqlQuerry);

    $usersStatement->execute();

    $users = $usersStatement->fetchAll();

    return $users;
}

function delete_user(int $id) {
    $db = data_base();

    $sqlQuerry = 'DELETE FROM users WHERE user_id = :id';

    $userDelete = $db -> prepare($sqlQuerry);

    $userDelete -> execute([
        'id' => $id
    ]);
}

function update_user(array $updateDatas){
    
    $db = data_base();

    $sqlQuerry = 'UPDATE users SET email = :email, firstname = :firstname, lastname = :lastname, statute = :statute, patrol = :patrol WHERE user_id = :id';

    $updateUser = $db -> prepare($sqlQuerry);

    $updateUser -> execute([
        'email' => $updateDatas['email'],
        'firstname' => $updateDatas['firstname'],
        'lastname' => $updateDatas['lastname'],
        'statute' => $updateDatas['statute'],
        'patrol' => $updateDatas['patrol'],
        'id' => $updateDatas['user_id']
    ]);
}