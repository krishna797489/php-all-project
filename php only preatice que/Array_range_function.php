<?php

/* range function ke throw */
$newArray=range(0,100,10); /* (0)staring,(100)ending,(10)set */
echo "<pre>";
print_r($newArray);
echo "</pre>";

/* for loop ke throw */
foreach(range('A','Z') as $letter )
{
    echo $letter . "<br>";
}

?>