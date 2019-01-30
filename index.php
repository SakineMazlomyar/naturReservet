<?php
session_start();
//When there is no session
if(!isset($_SESSION['post'])) {

    header('Location:settings.php');
    session_write_close();
    exit();

}
//When there is session
if(isset($_SESSION['post'])) {
    header('Location:result.php');
    session_write_close();
    exit();
}
?>