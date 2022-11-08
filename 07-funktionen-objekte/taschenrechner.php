<?php
class Taschenrechner{
    private $speicher = 0;

    function addiere($wert){
        $this->speicher = $this->speicher + $wert;
    }

    function subtrahiere($wert){
        $this->speicher = $this->speicher - $wert;
    }

    function ergebnis(){
        return $this->speicher;
    }
}

$t = new Taschenrechner();

$t->addiere(25);
$t->subtrahiere(7);
// geht nicht: $t->speicher = 500;
$t->addiere(200);

echo $t->ergebnis();