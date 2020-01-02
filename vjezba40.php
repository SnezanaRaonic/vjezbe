<?php

$recenica = "Superman je Klark Kent. Spiderman je Piter Parker. Batman je Bruce Wayne. Wonderwoman je Diana Price. Flash je Barry Alen.";


$superheroji =array(
    "Superman",
    "Spiderman",
   " Batman",
   "Wonderwoman",
   "Flash"
);

$recenicaNiz = explode(" ", $recenica);
foreach($recenicaNiz as $key =>&$value){
    $velicinaSuperheroja = count ($superheroji);
    for($i=0; $i<$velicinaSuperheroja; $i++){ 
        if($value == $superheroji[$i]){
            $value= "********";
        }
}
}
print_r($recenicaNiz);

?>