<?php
abstract class Animal{
    protected $animalPictures= "";
    protected $animalNmbers = "";

    abstract function makeSound();

    function __construct($animalPictures, $animalNmbers){
        $this->animalNmbers = $animalNmbers;
        $this->animalPictures = $animalPictures;
    }

}

?>