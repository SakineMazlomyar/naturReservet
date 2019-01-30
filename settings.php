<?php
include("./view/head.php")
?>
<body>
<h1>Ange vad du söker!</h1><br>
<form id="ajax" method="post" action="./result.php">

<?php
include("./form/formClass.php");
include("./form/apaInputClass.php");
include("./form/giraffInputClass.php");
include("./form/tigerInputClass.php");
include("./form/kokonnottInputClass.php");
include("./form/tigerInputClass.php");
include("./form/antilopInputClass.php");
include("./form/granInputClass.php");
include("./form/lejonInputClass.php");
include("./form/palmtradInputClass.php");
include("./form/rosInputClass.php");

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