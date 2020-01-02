<?php

function login($boja ="red"){
    echo "<form  style='background-color:{$boja}; color:#fff;  text-align:center; padding:10px; width:40%; margin:auto; action='#' method = 'GET'>" ;
    echo "<div>";
      echo "<label for= 'username'>Username</label>";
      echo "<input type ='text' name='username'>" ;
      echo "</div>";
      echo "<div>";
      echo "<label for= 'password'>Password</label>";
      echo "<input type ='password' name='password'>" ;
      echo "</div>";
      
      echo "<div>";
      echo "<input type='submit' value='login'>";
      echo "</div>";
      echo "</form>";
      
}
login("blue");
login("green");
login("yellow");

?>