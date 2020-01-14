<?php

 class Point{
     public $x;
     public $y;
     public function Show(){
         echo  "Position is x : {$this->x} y: {$this->y}";
     }
 }
$p = new Point();
$p->x=23;
$p->y=32;
$p->Show();



?>