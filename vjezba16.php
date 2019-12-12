<?php
$current_time = date("h");
$user_age =25;
$user_name="John";
$user_gender ="m";
$time_message ="morning";
$user_message;
if($current_time > 0 && $current_time < 12){
    $time_message ="morning";
}else if($current_time > 12 && $current_time < 18){
    $time_message = "day";
}else{
    $time_message ="evening";
}
 $user_message = "Good ". $time_message .",nice ";

 switch($user_gender){
     case "m":
        $user_message .= (($user_age<18)? "boy" : "man");
     break;
     case "f":
        $user_message .=(($user_age<18)? "girl" : "woman");
     break;
     default:$user_message .="someone";
    break;
 }
echo $user_message . $user_name . " and welcome to our site!<br>";
echo "Your age is, " . $user_age . "!<br>";
echo "Current time is," .$current_time . "h!";

?>