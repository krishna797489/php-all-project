<?php


/* function testing(&$string)
{
    $string .="And something extra.";
}
$str="Thise is a string ";
testing($str);

echo $str;

 */

 function first($num) /* function argument */
 {
    $num+=5;
 }

 function second(&$num) /* reference */
 {
    $num+=7;
 }

 $number=10;
 first($number);
 echo "Original value is $number<br>";

 second($number);
 echo "original value is $number<br>"
?>