<?php
include("./view/headSubClasses.php");

echo  "<form method='post'>
          <input type='submit' value='restartPage' name='restartPage'>
      </form>";


session_start();
include("./classes/animalClass.php");
include("./classes/apaClass.php");
include("./classes/giraffClass.php");
include("./classes/kokosnottClass.php");
include("./classes/tigerClass.php");
include("./classes/antilopClass.php");
include("./classes/gorillClass.php");
include("./classes/granClass.php");
include("./classes/lejonClass.php");
include("./classes/palmtradClass.php");
include("./classes/rosClass.php");

//First we save all values to session from $_Post which is an assocciative array 

if(isset($_POST['subitAnimal'])){
    foreach($_POST as $k=>$v) {
        $_SESSION['post'][$k]=$v;
    }
}
//Second we check the post array in session and post the pic of value we want
?>
<div>

<?php
if ($_SESSION['post']) {
    
    foreach($_SESSION['post'] as $key=>$value) {
        
        if($key == 'Apa' && $value == $value){
            $apa = new Apa('./pictures/apa.jpg', $value);
            echo $apa->makeSound();
    
            
        }
        
        if($key == 'Giraff' && $value == $value) {
            $graff = new Giraff('./pictures/giraff.jpg', $value);
            echo $graff->makeSound();
            
        }
        
        
        if($key == 'Kokosnott' && $value == $value) {
            $kokosnott = new Kokosnott('./pictures/kokosnott.png', $value);
            echo $kokosnott->makeSound();
            
        }
        if($key == 'Tiger' && $value == $value) {
            $tiger = new Tiger('./pictures/tiger.jpg', $value);
            echo $tiger->makeSound();
            
        }
        if($key == 'Antilop' && $value == $value) {
            $tiger = new Antilop('./pictures/antelope.jpg', $value);
            echo $tiger->makeSound();
            
        }
        if($key == 'Gorill' && $value == $value) {
            $tiger = new Gorill('./pictures/gorill.jpg', $value);
            echo $tiger->makeSound();
            
        }
        if($key == 'Gran' && $value == $value) {
            $tiger = new Gran('./pictures/gran.png', $value);
            echo $tiger->makeSound();
            
        }
        
        if($key == 'Lejon' && $value == $value) {
            $tiger = new Lejon('./pictures/lejon.jpg', $value);
            echo $tiger->makeSound();
            
        }
        if($key == 'Palmtrad' && $value == $value) {
            $tiger = new Palmtrad ('./pictures/palmtrad.jpg', $value);
            echo $tiger->makeSound();
            
        }
        
        if($key == 'Ros' && $value == $value) {
            $tiger = new Ros ('./pictures/ros.jpg', $value);
            echo $tiger->makeSound();
            
        }
        

    }


    if(isset($_POST['restartPage'])){
        unset($_SESSION['post']);
        header('Location:settings.php');
    
    }


}


?>
</div>
    
</body>
</html>