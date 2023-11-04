<?php
/* array rand */
$color=array("red","green","blue","yellow","brown");

/* $newArray=array_rand($color,2);  *//* jitni bar refresh krenge utni bar alag no show krega  */
shuffle($color); /* ye only iske andar hi use hoga koi new array creat nhi krega  */

echo "<pre>";
print_r($color); /* $newArray iske andar dal denge to rand ke jesa show krega */
echo "</pre>";


 /* echo $color[$newArray[0]] ."<br>"; 
 echo $color[$newArray[1]];  */



?>