<?php


class Giraffer extends Animal{
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
        return "Det här är giraffs djud";
    }
 

}
$graff = new Giraffer("<img style='width: 30%;' src='../pictures/giraff.jpg'>", $_POST['animalNumber2']);
echo $graff->getPicture();


if($_POST['animalNumber2']){
    echo $graff->makeSound();
    
}


?>