<?php include("../view/headSubClasses.php")?>
<?php
include("../classes/animalClass.php");
include("../classes/apaClass.php");
include("../classes/giraffClass.php");
include("../classes/kokosnottClass.php");
include("../classes/tigerClass.php");


$apa = new Apor("<img style='width: 30%;' src='../pictures/apa.jpg' onclick=playMonkeySound()>", $_POST['Apor']);
echo $apa->getPicture();
$graff = new Giraffer("<img style='width: 30%;' src='../pictures/giraff.jpg' onclick=playGiraffSound()>", $_POST['Giraffer']);
echo $graff->getPicture();
$kokosnott = new Kokosnotter("<img style='width: 30%;' src='../pictures/kokosnott.png' onclick=playKokosnottSound()>", $_POST['Kokosnottrar']);
echo $kokosnott->getPicture();
$tiger = new Tiger("<img style='width: 30%;' src='../pictures/tiger.jpg' onclick=playTigerSound()>", $_POST['Tigrar']);
echo $tiger->getPicture();

?>
<body>
    
</body>
</html>