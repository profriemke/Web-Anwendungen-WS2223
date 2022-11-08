<?php

function printMehrmals($string, $count){

    for($i=1; $i<=$count; $i++){
        echo $i." ".$string;
        echo "<br>";
    }
}


printMehrmals("Samstag ist gut" , 2);
printMehrmals("Montag ist doof", 100);