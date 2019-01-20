<?php

abstract class Mobile{
    protected $name = "";
    protected $made= "";
    protected $color= "";
    protected $cpu= "";
    protected $ram= "";
    protected $simcard= "";
    protected $startInsurance= "";
    protected $endInsurance = "";

    abstract function updateInsurance();

    public function getDetails(){
        return(
            'Description '.'; '.$this->name.', '.$this->made.', '.$this->color.', '
            .$this->cpu.', '.$this->ram.', '.$this->simcard.', '
            .$this->startInsurance.', '.$this->endInsurance.';'. '<br>'
        );
    }

    public function __construct($name, $made, $color, $cpu, $ram, $simcard, $startInsurance, $endInsurance){

        $this->name = $name;
        $this->made = $made;
        $this->color = $color;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->simcard = $simcard;
        $this->startInsurance = $startInsurance;
        $this->endInsurance= $endInsurance;

    }


}

class Iphone extends Mobile{
    protected $newInsurance;
    public function __construct($name, $made, $color, $cpu, $ram, $simcard, $startInsurance, $endInsurance, $newInsurance){

        parent::__construct($name, $made, $color, $cpu, $ram, $simcard, $startInsurance, $endInsurance );
        $this->newInsurance = $newInsurance;
    }
    public function getDetails() {
        return parent::getDetails();
    }
    function updateInsurance() {
        return (
            'End Insurance'.$this->endInsurance. ','. 'Start New Insurance'. ','. $this->newInsurance);
    }
}

$object = new Iphone("iphone6plus", 2012, "black", "34g", "2mgb", "yes", 2012, 2013, 2018);

echo $object->getDetails();
echo $object->updateInsurance();

?>