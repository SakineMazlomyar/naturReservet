<?php
class Lejon extends Animal{
    function __construct($animalPicSrc, $animalNmbers){
        parent::__construct($animalPicSrc, $animalNmbers);
    
    }
    function makeSound(){
        for($i = 0; $i <$this->animalNmbers; $i++){
            echo '<img src='.$this->animalPicSrc.' onclick=playLionSound()>';
        }
        
    }
}

?>