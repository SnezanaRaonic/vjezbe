<?php
require 'model.php';

$class = $user_status = "";
 switch($status){
     case 1:
       $class=$user_status = "administrator";
     break;

     case 2:
        $class =$user_status ="coordinator";

     break;

     case 3:
        $class = $user_status="user";

     break;
     default:
     $class="unknown";
     $user_status="Unknown user";
    break;


 }
 $message =($class != 'unknown') ? 'welcome' : 'warning';

$user_status = "<span class ='{$class}'> {$message} {$user_status} </span>";


?>