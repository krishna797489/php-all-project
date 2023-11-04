<?php
function myfunction($n,$m)
{
    return $n . "-" . $m;
}
$a=['orange','banan','apple'];

$newArray=array_reduce($a, 'myfunction');
echo "<pre>";
print_r($newArray);
echo "</pre>";


?>