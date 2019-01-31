<?php

session_start();
//When there is no session
if(!isset($_SESSION['post'])) {
    header('Location:settings.php');
    die();
 
}
//When there is session
if(isset($_SESSION['post'])) {
    
    header('Location:result.php');
    die();

}




?>