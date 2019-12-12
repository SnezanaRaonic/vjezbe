<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cijena i popusti</title>
</head>
<style>
    .border{
        border: 1px solid red;
    }

    </style>
<body>
<?php
$price =mt_rand(10,100);
$isNew =mt_rand(0,1)==1;
$discount =0.2;
$class = "";
//zavrseno ispitivanje da li je proizvod nov
if($isNew){
    $class = "class = 'border' ";
}
//zavrseno ispitivanje da li je proizvod sa ili bez popusta
if($price > 50){
    $discountPrice = $price * $discount;
    echo " <h1>The item is on discount:"  .
    "<span {$class}>" .
   $discountPrice .
   "BAM" .
   "<del>(" .  $price .")</del>" .
   "</span>" .
   "</h1>";
}else{
    echo "<h1> The item is not on discount: " .
    "<span {$class}>" . $price . "BAM". "</span>" ."</h1>";
}


?>
</body>
</html>
