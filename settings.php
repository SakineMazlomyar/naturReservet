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
class Antilop extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Gorill extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Gran extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Lejon extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Palmtrad extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}
class Ros extends Form{
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

$input5 = new Antilop();
echo $input5->setLabel();
echo $input5->getInputElement();

$input6 = new Gorill();
echo $input6->setLabel();
echo $input6->getInputElement();

$input7 = new Gran();
echo $input7->setLabel();
echo $input7->getInputElement();

$input8 = new Lejon();
echo $input8->setLabel();
echo $input8->getInputElement();

$input9 = new Palmtrad();
echo $input9->setLabel();
echo $input9->getInputElement();

$input10 = new Ros();
echo $input10->setLabel();
echo $input10->getInputElement();



?>
<input type="submit" name='subitAnimal'>
</form>
</body>
</html>