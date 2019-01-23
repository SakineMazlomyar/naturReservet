<?php include("../view/headSubClasses.php")?>
<?php
echo "<a href='../settings.php'> Click here</a>";
/* function makeEmpySession(){

} */

include("../classes/animalClass.php");
include("../classes/apaClass.php");
include("../classes/giraffClass.php");
include("../classes/kokosnottClass.php");
include("../classes/tigerClass.php");


session_start();
if (!isset($_SESSION['animal'])) {
    $apa = new Apa("<img style='width: 30%;' src='../pictures/apa.jpg' onclick=playMonkeySound()>", $_POST['Apa']);
    echo $apa->getPicture();
    $_SESSION['animal'] = $_POST['Apa'];
    
}

if(!isset($_SESSION['animal'])) {
    
    $graff = new Giraff("<img style='width: 30%;' src='../pictures/giraff.jpg' onclick=playGiraffSound()>", $_POST['Giraff']);
    echo $graff->getPicture();
    $_SESSION['animal'] = $_POST['Giraff'];
    
}
if (!isset($_SESSION['animal'])) {
    $kokosnott = new Kokosnott("<img style='width: 30%;' src='../pictures/kokosnott.png' onclick=playKokosnottSound()>", $_POST['Kokosnott']);
    echo $kokosnott->getPicture();
    $_SESSION['animal'] = $_POST['Kokosnott'];
}
if(!isset($_SESSION['animal'])){
    $tiger = new Tiger("<img style='width: 30%;' src='../pictures/tiger.jpg' onclick=playTigerSound()>", $_POST['Tiger']);
    echo $tiger->getPicture();
    $_SESSION['animal'] = $_POST['Tiger'];

}
?>
<body>
    
</body>
</html>