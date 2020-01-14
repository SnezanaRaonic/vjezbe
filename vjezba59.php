<?php
class Gradjevina{
   public $duzina;
   public $sirina;


   public function __construct($duzina, $sirina){
       
   

$this->duzina=$duzina;
$this->sirina=$sirina;
}

public function ispis(){
    echo "Moja gradjevina je duga" .$this->duzina . " i visoka" .$this->sirina . "<br>";
}
}
$kuca= new Gradjevina(20,10);
$zgrada = new Gradjevina(30,30);
$vikendica = new Gradjevina(5,7);

$kuca->ispis();
$zgrada->ispis();
$vikendica->ispis();


?>