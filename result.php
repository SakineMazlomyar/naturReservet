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

    foreach($_SESSION['post'] as $key=>$value) {

        if($key == 'Apa' && $value == $value){
            $apa = new Apa("<img style='width: 30%;' src='./pictures/apa.jpg' onclick=playMonkeySound()>", $value);
            echo $apa->makeSound();

        }

        if($key == 'Giraff' && $value == $value) {
            $graff = new Giraff("<img style='width: 30%;' src='./pictures/giraff.jpg' onclick=playGiraffSound()>", $value);
            echo $graff->makeSound();
        
        }
        

        if($key == 'Kokosnott' && $value == $value) {
            $kokosnott = new Kokosnott("<img style='width: 30%;' src='./pictures/kokosnott.png' onclick=playKokosnottSound()>", $value);
            echo $kokosnott->makeSound();

        }
        if($key == 'Tiger' && $value == $value) {
            $tiger = new Tiger("<img style='width: 30%;' src='./pictures/tiger.jpg' onclick=playTigerSound()>", $value);
            echo $tiger->makeSound();

        }
        
    }
}

?>
<body>
    
</body>
</html>