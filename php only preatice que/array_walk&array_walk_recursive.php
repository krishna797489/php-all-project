<?php
$fruits=array(
    "a"=> "Lemon",
    "b"=> "Orange",
    "c"=> "Banana",
    "d"=> "Apple"
);

array_walk($fruits, "myfunction", "is a key of ");
function myfunction($value,$key,$peram)
{
    echo "$key $peram $value <br>";
}




?>