<?php


    abstract class Animal{
        abstract function makeSound();

    }

    class Apor extends Animal{
        public $picture = "";
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
            return "Det här är apas djud";
        }

    }
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
    class Kokosnotter extends Animal{
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
            return "Det har inget djud";
        }

    }

    $apa = new Apor("<img style='width: 30%;' src='./pictures/apa.jpg'>", $_POST['animalNumber1']);
    echo $apa->getPicture();


    $graff = new Giraffer("<img style='width: 30%;' src='./pictures/giraff.jpg'>", $_POST['animalNumber2']);
    echo $graff->getPicture();
    

    $tiger = new Tiger("<img style='width: 30%;' src='./picturestiger.jpg'>", $_POST['animalNumber3']);
    echo $tiger->getPicture();
    

    $kokosnott = new Kokosnotter("<img style='width: 30%;' src='./pictures/kokosnott.png'>", $_POST['animalNumber4']);
    echo $kokosnott->getPicture();
    
   
    if(isset($_POST['subitAnimal'])){
        if($_POST['animalNumber1']){
            echo $apa->makeSound();
        
        }
        if($_POST['animalNumber2']){
            echo $graff->makeSound();
            
        }
        if($_POST['animalNumber3']){
            echo $tiger->makeSound();
        
        }if($_POST['animalNumber4']){
            echo $kokosnott->makeSound();
        }

    }
    



?>
