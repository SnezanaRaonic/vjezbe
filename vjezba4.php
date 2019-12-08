<?php
$potrosnjaGoriva =7;
$stanjeRezervoara =50;
$ocekivanaDistanca = 1000;
$cijenaGoriva =2.31;
$cijenaPuta= $potrosnjaGoriva * 10 * $cijenaGoriva;

define('KM', 'kilometara');
define('ZAP', 'litara');
define('POT', 'litara na stotinu kilometara');
define('GOR', 'gorivo');

$mogucaDistanca = $stanjeRezervoara / $potrosnjaGoriva * 100;
$mogucaDistanca = round($mogucaDistanca,2);

$stanje =$mogucaDistanca > $ocekivanaDistanca;
echo "Stanje:<br>" . $stanje;

if($mogucaDistanca > $ocekivanaDistanca){

    $stanje = "moze";
}else{
    $stanje = "ne moze";


}


echo "Automobil koji ima potrosnju goriva " . POT ." , sa rezervoarom od $stanjeRezervoara " . ZAP  . ", moze preci $mogucaDistanca"
.KM . "!";
echo "<br>";
echo "Obzirom da je ocekivana distanca $ocekivanaDistanca" .KM. ", ovaj automobil " .$stanje. " preci bez sipanja goriva.<br>";
echo "Automobil ce morat stati da dospe " .GOR . " , a ukupan put ce ga kostati $cijenaPuta  konvertibilnih maraka.";

?>