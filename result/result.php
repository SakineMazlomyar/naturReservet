<?php

//header("Content-Type: application/json");
abstract class Animal{
    protected $picture = "";
    protected $animalNmber = "";

    public function getPicture(){
        for($i=0; $i<$this->animalNmber; $i++){
            return $this->picture;
        };

    }

    function __construct($picture, $animalNmber){
        $this->picture = $picture;
        $this->animalNmber = $animalNmber;
    }
    abstract function makeSound();
    

}

include("../superclasses/apaSuperclass.php");
include("../superclasses/giraffSuperclass.php");
include("../superclasses/tigerSuperclass.php");
include("../superclasses/kokosnottSuperclass.php");



?>