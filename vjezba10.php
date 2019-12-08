<?php

$promjenjiva = "Ovo je konstanta";
define('KONSTANTA', "Ovo je konstanta");
echo $promjenjiva;
echo "<br>";
echo KONSTANTA;

$promjenjiva = "Ovo je promijenjena promjenjiva";
define('KONSTANTA', "Ovo je nova konstanta");
echo $promjenjiva;
echo "<br><br>";
echo KONSTANTA;
?>