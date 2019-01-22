<?php
header("Content-Type: application/json");
session_start();
if(isset($_SESSION['apa'])){
    header('Location:result/result.php');
    echo json_encode(true);
}else{
    echo json_encode(false);
     header('Location:settings.php');
}
?>