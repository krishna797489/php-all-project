<?php
/* array_key_function=> (1)array_keys(),(2)array_key_first(),(3)array_key_last(),
(4)array_key_exists(),(5)key_exists()
 */
$color=["red","green","blue","yellow"];

$color=[
    "first"=>"red",
    "second"=>"green",
    "third"=>"blue",
    "fourth"=>"yellow"
];  
  /* 1 */  $newArray=array_keys($color);

   /* 2 */ $newArray=array_key_first ($color);
   
   /* 3 */ $newArray=array_key_last($color);

   /* 4 */$newArray=array_key_exists("first",$color); /* search first hoga to 1 show krega vrna 0 show krega  */

   /* 5 */$newArray=key_exists("six",$color);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";



?>