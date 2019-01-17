<?php


    abstract class animalSound{
        abstract function makeSound();

    }

    class Apor extends animalSound{
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
    class Giraffer extends animalSound{
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
    class Tiger extends animalSound{
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
    class Kokosnotter extends animalSound{
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

    $apa = new Apor("<img style='width: 30%;' src='apa.jpg'>", $_POST['animalNumber1']);
    echo $apa->getPicture();
    echo $apa->makeSound();

    $graff = new Giraffer("<img style='width: 30%;' src='giraff.jpg'>", $_POST['animalNumber2']);
    echo $graff->getPicture();
    echo $graff->makeSound();

    $tiger = new Tiger("<img style='width: 30%;' src='tiger.jpg'>", $_POST['animalNumber3']);
    echo $tiger->getPicture();
    echo $tiger->makeSound();

    $kokosnott = new Tiger("<img style='width: 30%;' src='kokosnott.png'>", $_POST['animalNumber4']);
    echo $kokosnott->getPicture();
    echo $kokosnott->makeSound();


?>
