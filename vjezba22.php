<?php

#useri koje imamo u sistemu
   $user = 1;
   $admin = 2;
   $superadmin = 4;
  
#user koji se loguje
   $loggedUser = 2;

   $allowedUser = $admin | $superadmin;
#0011                0001   | 0010

if(($loggedUser & $allowedUser) != 0){
    echo "This user is allowed";
}else{
    echo "User is not allowed";
}
#operacija  AND !
#$allowedUser 0011
#$loggedUser  0010
#rezultat     0010

?>