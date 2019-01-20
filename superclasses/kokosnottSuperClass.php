<?php

class Kokosnotter extends Animal{
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
$kokosnott = new Kokosnotter("<img style='width: 30%;' src='../pictures/kokosnott.png'>", $_POST['Kokosnottrar']);
echo $kokosnott->getPicture();


if($_POST['Kokosnottrar']){
    echo $kokosnott->makeSound();
}




?>