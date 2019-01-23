<?php
session_start();
if(isset($_SESSION['animal'])){
    header('Location:result/result.php');
    exit;

}else{
    header('Location:settings.php');
    exit;
}
?>