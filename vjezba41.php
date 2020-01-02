<?php


$randomBroj=mt_rand(1,25);
$broj1 = $broj2 = $broj3 =$broj4 = $broj5 =0;

do{
    $broj1 = mt_rand(1,25);
    $broj2 = mt_rand(1,25);
    $broj3 = mt_rand(1,25);
    $broj4 = mt_rand(1,25);
    $broj5 = mt_rand(1,25);
}while ($broj1 == $broj2 || $broj1 ==$broj3 || $broj1 == $broj4 ||
$broj1 == $broj5 || $broj2 ==$broj3 || $broj2 ==$broj4 ||
$broj2== $broj5 ||$broj3 == $broj4 || $broj3 == $broj5 ||
$broj4==$broj5);
  
echo $randomBroj ."<br>";

if($randomBroj ==$broj1){
    echo "<div style ='color:red; display:inline;'>" .$broj1. "</div>". " ";

}else{echo $broj1;
}

if($randomBroj ==$broj2){
    echo "<div style ='color:red; display:inline;'>" .$broj2. "</div>"." ";

}else{
    echo $broj2;
}

if($randomBroj ==$broj3){
    echo "<div style ='color:red; display:inline;'>" .$broj3. "</div>". " ";

}else{
    echo $broj3;
}

if($randomBroj ==$broj4){
    echo "<div style ='color:red; display:inline;'>" .$broj4. "</div>". " ";

}else{
    echo $broj4;
}

if($randomBroj ==$broj5){
    echo "<div style ='color:red; display:inline;'>" .$broj5. "</div>". " ";

}else{
    echo $broj5;
}






?>