<?php
class Apor extends Animal{
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
        return "Det här är apas ljud.";
    }

}
$apa = new Apor("<img style='width: 30%;' src='../pictures/apa.jpg'>", $_POST['Apor']);
echo $apa->getPicture();


if($_POST['Apor']){
    echo $apa->makeSound();

}


?>