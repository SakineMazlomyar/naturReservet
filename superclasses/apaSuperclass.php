
<?php include("../view/headSuperClasses.php")?>
<?php
class Apor extends Animal{
    function __construct($animalPictures, $animalNmbers){
        parent::__construct($animalPictures, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }
}
$apa = new Apor("<img style='width: 30%;' src='../pictures/apa.jpg' onclick=playMonkeySound()>", $_POST['Apor']);
echo $apa->getPicture();

?>
<body>
    
</body>
</html>
