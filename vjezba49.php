<?php

function kalkulator($broj1, $broj2, $operator){
    if($operator == "+"){
        return $broj1 +$broj2;
    }elseif($operator== "-"){
        return $broj1 -$broj2;
    }elseif($operator =="*"){
        if($broj1 == 0 || $broj2 == 0){
            return 0;
        }else{
            return $broj1 * $broj2;
        }
    }else{
        if($broj1 ==0 || $broj2 ==0){
            return "error";
        }else{
            return $broj1/ $broj2;
        }
    }
}

echo kalkulator(10,5, "+");

?>