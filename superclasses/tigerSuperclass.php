<?php

class Tiger extends Animal{
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
        return "Det här är tigers djud";
    }


}
$tiger = new Tiger("<img style='width: 30%;' src='../pictures/tiger.jpg'>", $_POST['Tigrar']);
echo $tiger->getPicture();

if($_POST['Tigrar']){
    echo $tiger->makeSound();

}



?>