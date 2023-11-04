<?php

/* array_replace index*/
/* $fruit=['orange','banana','apple','grapes'];
$veggie=['carrot','pea']; */  /* jitni idhar value se dalenge utni hi replace hogi abi only two value replace hogi */

/* $newArray=array_replace($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";
 */

 /* Associative ke throw */
 $fruit=['orange','banana', 'a'=> 'apple','grapes'];
 $veggie=['a'=>'carrot', 1=>'pea'];

 $newArray=array_replace($fruit, $veggie);
 echo "<pre>";
 print_r($newArray);
 echo "</pre>";

 /* array replace_reculsive */
 $arrray1=array("a"=>array("red"),"b"=>array("green","pink"));

 $arrray2=array("a"=>array("yellow"),"b"=>array("black"));

 $newArray=array_replace_recursive($arrray1,$arrray2);

 echo "<pre>";
 print_r($newArray);
 echo "</pre>";
?>