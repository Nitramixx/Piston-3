<?php
session_start();

$links =[
    'articleRooter.php?a=histoire.php',
    'articleRooter.php?a=troupe.php',
    'articleRooter.php?a=legende.php',
    'articleRooter.php?a=campsController.php',
    'articleRooter.php?a=contact.php'
];

$buttons = [
    'articleRooter.php?a=histoire.php' => 'Histoire de',
    'articleRooter.php?a=troupe.php' => 'La troupe',
    'articleRooter.php?a=legende.php' => 'Légende',
    'articleRooter.php?a=campsController.php' => 'Les camps',
    'articleRooter.php?a=contact.php' => 'Contact',
    '../profile/myAccountController.php' => 'Mon compte',
    '../profile/connectionController.php' => 'Connexion'
];

$adress = $_GET['a'];

$header = build_header($adress, $links);
require_once($adress);


function build_header(string $adresse, array $links){
    foreach($links as $link){

        if (!strpos($link,$adresse) !== false){
            $header[] = $link;
        }
    }
    if (isset($_SESSION['EMAIL'])){
        $header[] = '../profile/myAccountController.php';
    }
    else{
        $header[] = '../profile/connectionController.php';
    }
    return $header;
}