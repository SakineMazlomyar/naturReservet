<?php
include("./view/head.php")
?>
<body>
<h1>Ange vad du söker!</h1><br>
<form id="ajax" method="post" action="./result/result.php">

<?php

abstract class Form{
    abstract function getInputElement();
    abstract function setLabel();

}
class Apor extends Form{

    function setLabel(){
    return '<label>'.get_class($this).'</label>';
    }
    function getInputElement(){
        return '<input id= "apa" type="number" name="'.get_class($this).'">';
    }
}
class Giraffer extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input id= "giraff" type="number" name="'.get_class($this).'">';
    }
}
class Tigrar extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Kokosnottrar extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}

$input1 = new Apor();
echo $input1->setLabel();
echo $input1->getInputElement();


$input2 = new Giraffer();
echo $input2->setLabel();
echo $input2->getInputElement();

$input3 = new Tigrar();
echo $input3->setLabel();
echo $input3->getInputElement();

$input4 = new Kokosnottrar();
echo $input4->setLabel();
echo $input4->getInputElement();
?>
<input type="submit" name='subitAnimal'>
</form>
</body>
</html>