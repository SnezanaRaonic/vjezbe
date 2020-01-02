<?php

$niz=array(

"vijest 1",
"vijest 2",
"vijest 3",
"vijest 4"


);


function novaVijest($niz){
    $vijest= mt_rand(0, count($niz)-1);
    echo $niz[$vijest];
}

novaVijest($niz);

?>