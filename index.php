<?php
session_start();

if(!isset($_SESSION['post'])) {

    header('Location:settings.php');
    session_write_close();
    exit();
}

if(isset($_SESSION['post'])) {
    header('Location:result.php');
    session_write_close();
    exit();
}
?>