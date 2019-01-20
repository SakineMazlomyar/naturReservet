<?php
class Apor extends Animal{
    function __construct($picture, $animalNmbers){
        parent::__construct($picture, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }

    function makeSound(){
        return "Det här är appas djud";
    }

}
$apa = new Apor("<img style='width: 30%;' src='../pictures/apa.jpg'>", $_POST['Apor']);
echo $apa->getPicture();

if($_POST['Apor']){
    echo $apa->makeSound();

}


?>