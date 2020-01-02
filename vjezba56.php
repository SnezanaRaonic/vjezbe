<?php

$server="localhost";
$user="root";
$password="";
$database="";
$port="3309";
$connection = mysqli_connect($server,$user, $password,$database,$port);

if(!$connection){
    die("Connection failed" .mysqli_connect_error());
}
mysqli_set_charset($connection, "utf8");
$query= "SELECT * FROM superheroes.users WHERE name LIKE '%%'";

$results= mysqli_query($connection, $query);

if($mysqli_nom_rows($results) > 0){
    while($row = mysqli_fetch_assoc($results)){
        echo"Hello Iam" .$row['name'] ."". $row['lastname'] . "<br>";
    }
}
//odavde radimo INSERT
/*
$queryInsert = "INSERT INTO superheroes.users(name,lastname,date) Values ('Tim', 'Drake', '21.12.2019')";

if(mysqli_query($connection, $queryInsert)){
    echo "Data inserted...";
}else{
    echo "Data is not inserted...";
}
*/


//odavde radimo UPDATE
$queryUpdate ="UPDATE superheroes.users SET name='Barry', lastname= 'Alan' WHERE id=4";

if(mysqli_query($connection, $queryUpdate)){
    echo "Data update...";
}else{
    echo "Data not update";
}
//odavde radimo DELETE

$queryDelete ="DELETE FROM superheroes.users WHERE id=2";

if(mysqli_query($connection,$queryDelete)){
    echo "Data deleted...";
}else
echo "Data not deleted...";





?>