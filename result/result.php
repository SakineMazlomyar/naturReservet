<?php include("../view/headSubClasses.php")?>
<?php

include("../classes/animalClass.php");
include("../classes/apaClass.php");
include("../classes/giraffClass.php");
include("../classes/kokosnottClass.php");
include("../classes/tigerClass.php");


$apa = new Apa("<img style='width: 30%;' src='../pictures/apa.jpg' onclick=playMonkeySound()>", $_POST['Apa']);
echo $apa->getPicture();
$graff = new Giraff("<img style='width: 30%;' src='../pictures/giraff.jpg' onclick=playGiraffSound()>", $_POST['Giraff']);
echo $graff->getPicture();
$kokosnott = new Kokosnott("<img style='width: 30%;' src='../pictures/kokosnott.png' onclick=playKokosnottSound()>", $_POST['Kokosnott']);
echo $kokosnott->getPicture();
$tiger = new Tiger("<img style='width: 30%;' src='../pictures/tiger.jpg' onclick=playTigerSound()>", $_POST['Tiger']);
echo $tiger->getPicture();
$_SESSION['apa'] = $_POST['Apa'];
$_SESSION['giraff'] = $_POST['Giraff'];
$_SESSION['kokosnott'] = $_POST['Kokosnott'];
$_SESSION['tiger'] = $_POST['Tiger'];
?>
<body>
    
</body>
</html>