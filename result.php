<?php
include("./view/headSubClasses.php");

echo "<a href='./settings.php'> Click here</a>";

session_start();
include("./classes/animalClass.php");
include("./classes/apaClass.php");
include("./classes/giraffClass.php");
include("./classes/kokosnottClass.php");
include("./classes/tigerClass.php");

//First we save all values to session from $_Post which is an assocciative array 
if(isset($_POST['subitAnimal'])){
    foreach($_POST as $k=>$v) {
        $_SESSION['post'][$k]=$v;
        }
}
//Second we check the post array in session and post the pic of value we want
if ($_SESSION['post']) {

    foreach($_SESSION['post'] as $kk=>$v) {

        if($kk == 'Apa' && $v == $v){
            $apa = new Apa("<img style='width: 30%;' src='./pictures/apa.jpg' onclick=playMonkeySound()>", $v);
            echo $apa->getPicture();

        }

        if($kk == 'Giraff' && $v == $v) {
            $graff = new Giraff("<img style='width: 30%;' src='./pictures/giraff.jpg' onclick=playGiraffSound()>", $v);
            echo $graff->getPicture();
        
        }
        

        if($kk == 'Kokosnott' && $v == $v) {
            $kokosnott = new Kokosnott("<img style='width: 30%;' src='./pictures/kokosnott.png' onclick=playKokosnottSound()>", $v);
            echo $kokosnott->getPicture();

        }
        if($kk == 'Tiger' && $v == $v) {
            $tiger = new Tiger("<img style='width: 30%;' src='./pictures/tiger.jpg' onclick=playTigerSound()>", $v);
            echo $tiger->getPicture();

        }
        
    }
}

?>
<body>
    
</body>
</html>