<?php

function f(){
   // var_dump (func_get_args());
   $parametri = func_get_args();
    echo $parametri[0];
}
f ("jedan", 3, "osam", "trinaest");
?>