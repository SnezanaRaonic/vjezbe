<?php

class Automobili{
    public $proizvodjac;
    public $naziv;
    public $brVrata;
    public $boja;
    public $potrosnja;
    public $jacinaMotora;


    public function __construct($proizvodjac,$naziv,$brVrata,$boja,$potrosnja,$jacinaMotora){
        $this->proizvodjac=$proizvodjac;
        $this->naziv=$naziv;
        $this->brVrata=$brVrata;
        $this->boja=$boja;
       $this->potrosnja=$potrosnja;
        $this->jacinaMotora=$jacinaMotora;

    }
    public function __toString(){
     return "AUTOMOBIL<br>Proizvodjac:" .$this->proizvodjac."<br> Naziv:" .$this->naziv. "<br>Broj vrata:" .$this->brVrata. "<br>Boja: ".$this->boja.
       "<br>Potrosnja:" .$this->potrosnja." L<br>Jacina motora:".$this->jacinaMotora. "<br><br>";
    }
   
    
   public function __destruct(){
     echo  "<hr>";
   }
}
abstract class Car{

    public abstract function openDoor();
    public abstract function closeDoor();
    public abstract function fireUp();
    public abstract function shutDown();
    
}
class Auto extends Car{
    public function openDoor(){
        "Open the door";
    }
    public function closeDoor(){
        "Close the door";
    }
    public function fireUp(){
        "Turn on";
    }
    public function shutDown(){
        "Turn off";
    }
}

$auto = new Automobili("KIA", "Sportage",5,"red",8.1, "97kw");
$auto2= new Automobili("KIA", "Ceed",5,"silver",6, "88kw");
echo $auto;
echo $auto2;
echo "<br>";

?>
