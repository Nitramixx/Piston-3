<?php

function create_camp(string $title, $link, $description) {

    try
    {
        $db = new PDO('mysql:host=localhost;dbname=smk;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

    $sqlQuery = "INSERT INTO camps(title, link, description) VALUES (:title, :link, :description)";

    $insertCamp = $db->prepare($sqlQuery);

    $insertCamp->execute([
        'title' => $title,
        'link' => $link,
        'description' => $description
    ]);
}
