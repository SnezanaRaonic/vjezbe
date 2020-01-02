<?php
//ova funkcija ispisuje nesto
function nazivFunkcije(){
    echo "Pozdrav iz funkcije";
}
//pva funkcija vraca nesto
function drugaFunkcija(){
    return "Pozdrav iz funkcije";
}

//poziv funkcija
nazivFunkcije();
 echo $rezultat = drugaFunkcija();

 function trecaFunkcija($ime){
echo "Ja se zovem " .$ime. "<br>";
 }


 trecaFunkcija("Amar");
 trecaFunkcija("Pero Djetlic");
 trecaFunkcija("John Wayne");
 trecaFunkcija("Dusko Dugousko");


 function cetvrtaFunkcija($ime= "Johnny English"){
     echo "Hi, " .$ime. "Welcome to MI7.";
 }
 cetvrtaFunkcija("His buddy");





?>