<?php include("../view/headSuperClasses.php")?>

<?php
class Tiger extends Animal{
    function __construct($animalPictures, $animalNmbers){
        parent::__construct($animalPictures, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }
/* 
    function makeSound(){
        return "Det här är tigers djud";
    } */
}
$tiger = new Tiger("<img style='width: 30%;' src='../pictures/tiger.jpg' onclick=playTigerSound()>", $_POST['Tigrar']);
echo $tiger->getPicture();

/* if($_POST['Tigrar']){
    echo $tiger->makeSound();

}
 */

?>
<body>
    
</body>
</html>