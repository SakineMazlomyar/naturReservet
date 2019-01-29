<?php
include("./view/head.php")
?>
<body>

<h1>Ange vad du söker!</h1><br>
<form id="ajax" method="post" action="./result.php">

<?php
abstract class Form{
    abstract function getInputElement();
    abstract function setLabel();

}
class Apa extends Form{

    function setLabel(){
    return '<label>'.get_class($this).'</label>';
    }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Giraff extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input  type="number" name="'.get_class($this).'">';
    }
}
class Tiger extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Kokosnott extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}

$input1 = new Apa();
echo $input1->setLabel();
echo $input1->getInputElement();


$input2 = new Giraff();
echo $input2->setLabel();
echo $input2->getInputElement();

$input3 = new Tiger();
echo $input3->setLabel();
echo $input3->getInputElement();

$input4 = new Kokosnott();
echo $input4->setLabel();
echo $input4->getInputElement();



?>
<input type="submit" name='subitAnimal'>
</form>
</body>
</html>