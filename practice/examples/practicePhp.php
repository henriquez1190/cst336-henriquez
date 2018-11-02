<?php
$printed = print("");
    for($i=0; $i<10; $i++){
        echo "#".$i;
    }
    function print($text){
        echo $text;
        return strlen($text)?true;false;
    }
    
?>