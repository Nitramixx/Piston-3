<?php
session_start();

if (isset($_SESSION['STATUTE']) && $_SESSION['STATUTE'] === 'RT'){
    
    require_once('usersListModel.php');
    if (isset($_GET['action'])){
        
        $actionDatas = $_GET;

        if ($actionDatas['action'] === 'delete'){
            delete_user($actionDatas['id']);
        }
        elseif ($actionDatas['action'] === 'update'){
            update_user($actionDatas);
            //Contrôiler les données !!!
        }
    }

    if (isset($_POST['statute'])){
        $updateData = $_POST;

        update_user($updateData);
    }
    

    $users = get_users_list();
    
    require('usersListView.php');
}