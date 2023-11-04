<?php

/* recursive function => if else ki tarah hota hea jab uski condition folse nhi hoti jab tak call hote rhega */
/* function display($number)
{
    if($number<=10)
    {
        echo "$number<br>";
        display($number+1);
    }
}
display(1);
 */

 /* second example */

 function factorial($n)
 {
    if($n==0)
    {
        return 1;
    }
    else
    {
        return ($n*factorial($n-1));
    }
 }
 echo factorial(5);

?>