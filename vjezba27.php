<?php
$start_value =10;
$end_value =120;
$trip =150;
$complete_value = $end_value - $start_value;
if($trip >$complete_value){
    $trip_value = $trip - $complete_value;
    echo "You passed" . $trip_value . "more than needed";
}elseif($trip < $complete_value){
    $trip_value = $complete_value -$trip;
    echo "You need". $trip_value ."more to travel";
}else{
    echo "You passed exactly how much you needed ";
}


?>