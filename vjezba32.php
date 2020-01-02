<?php

$item1 ="papuce";
$item2 ="patike";
$item3 ="cipele";

$price="30";

if($price == "25"){
    echo "<h1>" .$item1. " : " . $price ." BAM . Cijena je niska</h1>";
}elseif($price == "60"){
   echo "<h1>" .$item2. " : " .$price . " BAM .Cijena je srednja </h1>";
}elseif($price == "90"){
    echo "<h1>" .$item3. " : " .$price . " BAM . Cijena je visoka</h1>";
 }else{
     echo "<h1>Odaberite artikal</h1>";
 }




?>