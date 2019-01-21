<?php include("../view/headSuperClasses.php")?>

<?php

class Kokosnotter extends Animal{
    function __construct($animalPictures, $animalNmbers){
        parent::__construct($animalPictures, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }

}
$kokosnott = new Kokosnotter("<img style='width: 30%;' src='../pictures/kokosnott.png' onclick=playKokosnottSound()>", $_POST['Kokosnottrar']);
echo $kokosnott->getPicture();

?>
<body>
    
</body>
</html>