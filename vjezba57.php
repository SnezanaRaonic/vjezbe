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
$query= "SELECT * FROM superheroes.my_company";

$results= mysqli_query($connection, $query);

echo "<table>";

echo "<tr>";
echo "<td>ID</td>";
echo "<td>Name</td>";
echo "<td>Email</td>";
echo "</tr>";


if($mysqli_nom_rows($results) > 0){
    while($row = mysqli_fetch_assoc($results)){
        echo "<tr>";
        echo "<td>" .$row['id'] . "</td>";
        echo "<td>" .$row['name'] . "</td>";
        echo "<td>" .$row['email'] . "</td>";
        echo "</tr>";
    }
}

 
echo "</table>";












?>