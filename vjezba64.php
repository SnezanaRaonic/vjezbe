<?php


class Kalkulator{
public $broj1="";
public $broj2="";


public function __construct($broj1, $broj2){
    $this->broj1=$broj1;
    $this->broj2=$broj2;
}
public function mnozenje(){
    return $this->broj1 * $this->broj2;
}
public function dijeljenje(){
    return $this->broj1 / $this->broj2;
}
public function sabiranje(){
    return $this->broj1 + $this->broj2;
}
public function oduzimanje(){
    return $this->broj1 - $this->broj2;
}
public function __toString(){
    return "Mnozenje: " .$this->mnozenje() . "<br>Dijeljenje: " .$this->dijeljenje() ."<br> Sabiranje: ". $this->sabiranje().
    "<br>Oduzimanje: ".$this->oduzimanje();
   }
}
$kalkulator = new Kalkulator(30,5);
echo $kalkulator;
?>