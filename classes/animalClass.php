<?php
abstract class Animal{
    protected $animalPicSrc= "";
    protected $animalNmbers = "";

    abstract function makeSound();

    function __construct($animalPicSrc, $animalNmbers){
        $this->animalNmbers = $animalNmbers;
        $this->animalPicSrc = $animalPicSrc;
    }

}

?>