<?php


class Giraffer extends Animal{
    function __construct($picture, $animalNmbers){
        parent::__construct($picture, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }

    function makeSound(){
        return "Det här är giraffs djud";
    }
}
$graff = new Giraffer("<img style='width: 30%;' src='../pictures/giraff.jpg'>", $_POST['Giraffer']);
echo $graff->getPicture();


if($_POST['Giraffer']){
    echo $graff->makeSound();
    
}


?>