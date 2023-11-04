<?php


/* $age=array(
    "bill"=>25,
    "steve"=>28,
    "elon"=>22
);

echo $age["steve"],"<br>";
echo $age["bill"],"<br>";
echo $age["elon"],"<br>"; */

/* second example */
$age=[
    "bill"=>25,
    "steve"=>28,
    "elon"=>22
];
$age["elon"];/* ye array ka data type show krne liye */
 echo "<pre>"; 
 var_dump($age); 
 echo "</pre>"; 

echo $age["bill"]."<br>"; /* ye value show krne ke liye */
echo $age["steve"]."<br>";
echo $age["elon"]."<br>"; 


?>