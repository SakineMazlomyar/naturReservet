<?php
class Kokosnott extends Animal{
    function __construct($animalPictures, $animalNmbers){
        parent::__construct($animalPictures, $animalNmbers);
    
    }
    public function getPicture() {
        return parent::getPicture();
    }

}
?>