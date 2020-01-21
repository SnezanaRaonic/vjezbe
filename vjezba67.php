<?php
class GetSet{ 
    private $name;


public function __get($name){
  if($name !=='name'){
      return "Svojstvo ne postoji";
  }
  return $this->$name;
}

public function __set($name,$value){
  if($name !== 'name' || empty($value)){
      return "Svojstvo ne postoji ili je poslata pogresna vrijednost";
  }
  $this->$name = $value;
}
}
$klasa = new GetSet();
 $klasa->name ="Samir";
echo $klasa->name;

$klasa->prezime ="Ziga";
echo $klasa->prezime;
?>