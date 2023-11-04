<?php

echo "Welcome to scope and local/global vars in php<br>";

/* Global variable */

 $a = 98; // Global Variable
$b = 9;

function printValue(){  /* ye function */
     global $a, $b; // yese print kr skte hea global variable ko
    $a = 100;/* global variale ko change kiya */
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b<br>";
}
printValue();
echo "$a <br>";
echo "$b <br>"; 


/* local variable 

/* function printlocal()
{
    $a=10;
    echo "$a";  /* ye function ke bahar nhi print hoga */
/*} */
?>
