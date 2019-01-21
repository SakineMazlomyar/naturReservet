<?php include("../view/headSuperClasses.php")?>

<?php
class Giraffer extends Animal{
    function __construct($animalPictures, $animalNmbers){
        parent::__construct($animalPictures, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }
}
$graff = new Giraffer("<img style='width: 30%;' src='../pictures/giraff.jpg' onclick=playGiraffSound()>", $_POST['Giraffer']);
echo $graff->getPicture();

?>
<body>
    
</body>
</html>
    