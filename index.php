<?php
session_start();
if(isset($_SESSION['apa'])){
    header('Location:result/result.php');
    exit;

}

if (isset($_SESSION['tiger'])){
    header('Location:result/result.php');
    exit;

}
if (isset($_SESSION['kokosnott'])){
    header('Location:result/result.php');
    exit;

}
if (isset($_SESSION['giraff'])){
    header('Location:result/result.php');
    exit;

} 
//When this should go to settings;
if(!isset($_SESSION['apa'])) {
    echo 
    header('Location:settings.php');
    exit;
    
}
if(!isset($_SESSION['tiger'])) {
    echo 
    header('Location:settings.php');
    exit;
    
}
if(!isset($_SESSION['kokosnott'])) {
    echo 
    header('Location:settings.php');
    exit;
    
}
if(!isset($_SESSION['giraff'])) {
    echo 
    header('Location:settings.php');
    exit;
    
}





?>