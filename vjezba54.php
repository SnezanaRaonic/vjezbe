<?php

$niz=array(2,6,13,99,43,165,97);

function sortiranje(&$niz, $smjer){
    switch ($smjer) {
        case 'vise':
          sort($niz);
            break;
        case 'nize':
            rsort($niz);
        default:
           sort($niz);
            break;
    }
}
sortiranje($niz, "nize");
var_dump($niz);
?>