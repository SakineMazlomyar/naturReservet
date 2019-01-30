<?php
class Ros extends Animal{
    function __construct($animalPicSrc, $animalNmbers){
        parent::__construct($animalPicSrc, $animalNmbers);
    
    }
    function makeSound(){
        for($i = 0; $i <$this->animalNmbers; $i++){
            echo '<img style="width: 30%;" src='.$this->animalPicSrc.'>';
        }
        
    }
}

?>