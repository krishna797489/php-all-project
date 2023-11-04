<?php
$food=array('orange','banana','grapes','apple');


sort($food); /* ascending order me show krna */
rsort($food);/* descending order me show krna */
$newArray=array_reverse($food);  /* reverse ke liye */

 echo "<pre>";
 print_r($newArray); /* only reverse ke liye $newarray lagega, baki ke liye $food chlega */
 echo "</pre>";




?>