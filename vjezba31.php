<?php

$niz = array(13,"tekst",
 array(1,12,14), array("jedan"=>"1",
"dva"=> 2, 34),
true);
 //debugging  
 print_r($niz);  
  
//pojedinacni ispis
echo $niz[1]. "<br>";
echo $niz[2][0]. "<br>";
echo $niz[3]['jedan'] . "<br>";

//mijenjanje vrijednosti
$niz[1] ="ovo je novi tekst";
$niz[2][0]= 256;
$niz[3]['jedan']= "ovo je novi broj";



?>