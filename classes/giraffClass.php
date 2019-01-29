<?php
class Giraff extends Animal{
    function __construct($animalPictures, $animalNmbers){
        parent::__construct($animalPictures, $animalNmbers);
    
    }
    function makeSound(){
        for($i = 0; $i <$this->animalNmbers; $i++){
            echo $this->animalPictures;
        }
        
    }
}

?>
    