<?php

//header("Content-Type: application/json");
abstract class Animal{
    protected $animalPictures= "";
    protected $animalNmbers = "";

    public function getPicture(){
        for($i = 0; $i <$this->animalNmbers; $i++){
            echo $this->animalPictures;
        }
        
    }

    function __construct($animalPictures, $animalNmbers){
        $this->animalNmbers = $animalNmbers;
        $this->animalPictures = $animalPictures;
    }

}

include("../superclasses/apaSuperclass.php");
include("../superclasses/giraffSuperclass.php");
include("../superclasses/tigerSuperclass.php");
include("../superclasses/kokosnottSuperclass.php");



?>