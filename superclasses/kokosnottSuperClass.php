<?php

class Kokosnotter extends Animal{
    protected $picture = "";
    public $animalNmber = "";

    function __construct($picture, $animalNmbers){
        $this->picture = $picture;
        $this->animalNmber = $animalNmbers;
        

    }
    public function getPicture(){
        for($i=0; $i<$this->animalNmber; $i++){
            echo $this->picture;
        }

    }

    function makeSound(){
        return "Det har inget djud";
    }
    

}
$kokosnott = new Kokosnotter("<img style='width: 30%;' src='../pictures/kokosnott.png'>", $_POST['animalNumber4']);
echo $kokosnott->getPicture();


if($_POST['animalNumber4']){
    echo $kokosnott->makeSound();
}




?>