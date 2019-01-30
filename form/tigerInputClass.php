<?php

class Tiger extends Form{
    function setLabel(){
        return '<label>'.get_class($this).'</label>';
        }
    function getInputElement(){
        return '<input type="number" name="'.get_class($this).'">';
    }
}

?>

