<?php 

session_start();
if (isset($_SESSION['EMAIL'])){
    require('myAccountView.php');
}

else{
    header('Location:../menu.php');
}