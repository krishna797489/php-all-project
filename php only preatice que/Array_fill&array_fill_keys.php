<?php
$a=array("a","b","c","d","c"); /* isko associative array bana dega */
$newArray=array_fill_keys($a , "Testing");

$newArray=array_fill(3,5,"Testing"); /*isse kitne se no stating krni hea kitni value chachiye  */

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>