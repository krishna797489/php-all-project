<?php
$fruit=['a'=> "orange",'b'=> "banana",'c'=> "grapes"];
$vegigi=['a'=> 'carrot','e'=> 'pea',];
$newArray=array_merge($fruit,$vegigi);/* yese bahut sare sare array ek sath show kr skte hea  */
$newArray=array_merge_recursive($fruit,$vegigi); /* yese kabi bi bahut sare array jisme same key hongi bo alg show ho jayegi */
 
$name=array("ram","krishna","salman");
$age=array("35","37","43");
$newArray=array_combine($name,$age);/* yese upar vala key hogi or or niche vali value ban jayegi*/
echo "<pre>";
print_r($newArray);
echo "</pre>";



?>