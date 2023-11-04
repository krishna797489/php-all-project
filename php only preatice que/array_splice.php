<?php
/* $color =['a'=>'red', 'b'=>'green', '42'=>'blue', 'd'=>'yellow'];
$newAraay=array_slice($color,1, 3, false);

echo "<pre>";
print_r($newAraay);
echo "</pre>";
 */
/* 2nd example  */
$color=["red","green","blue","yellow","brown"];
array_splice($color, 2);
echo "<pre>";
print_r($color);
echo "</pre>";



?>