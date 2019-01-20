<?php
class Tiger extends Animal{
    function __construct($picture, $animalNmbers){
        parent::__construct($picture, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }

    function makeSound(){
        return "Det här är tigers djud";
    }
}
$tiger = new Tiger("<img style='width: 30%;' src='../pictures/tiger.jpg'>", $_POST['Tigrar']);
echo $tiger->getPicture();

if($_POST['Tigrar']){
    echo $tiger->makeSound();

}



?>