<?php
function mojaFunkcija($parametar){
    if($parametar < 10){
        $parametar++;
        echo $parametar ."<br>";
        mojaFunkcija($parametar);
    }else{
        echo "kraj izvrsenja";
    }
}

mojaFunkcija(1);




$funkcija  = create_function('$a', 'return 2*$a;');
echo $funkcija(2). "<br>";
echo $funkcija(64) ."<br>";

?>