<?php
session_start();

if(isset($_SESSION['apa'])){
   
    header('Location:result/result.php');
    
} elseif (isset($_SESSION['tiger'])){

    header('Location:result/result.php');

} elseif (isset($_SESSION['kokosnott'])){

    header('Location:result/result.php');

} elseif (isset($_SESSION['giraff'])){

    header('Location:result/result.php');
} else {
    header('Location:settings.php');
}




?>