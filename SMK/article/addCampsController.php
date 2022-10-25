<?php
session_start();

if ($_SESSION['STATUTE']=='RT'){
    require_once('addCampsView.php');

    if (isset($_POST['title'])){
        $campDatas = $_POST;

        $title = $campDatas['title'];
        $link = $campDatas['link'];

        $description = $_FILES['description'];
        try{
            if (isset($description) && $description['error']==0){
                $descriptionInfos = pathinfo($description['name']);
                $descriptionExtension = $descriptionInfos['extension'];
                $descriptionName = $descriptionInfos['filename'];
                try{
                    if ($descriptionExtension == 'pdf'){
                        move_uploaded_file($description['tmp_name'], '../assets/camps/'.basename($description['name']));
                    }
                    else{
                        throw new Exception("Le fichier n'est pas valide: il doit être au format pdf!!!");
                    }
                }
                catch(Exception $e){
                    $errorMessage = $e->getMessage();
                }
            }
            else{
                throw new Exception("Echec de l'envoi, veuillez réessayer!!!");
            }
        }
        catch(Exception $e){
            $errorMessage = $e ->getMessage();
        }

        require_once('addCampsModel.php');
        create_camp($title, $link, $descriptionName);
        header('Location:articleRooter.php?a=campsController.php');
    }
}





