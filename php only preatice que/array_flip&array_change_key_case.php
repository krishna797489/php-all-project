<?php
/* swap krna bill ki jagah 10 ayega or 10 ki jagah bill ayega */
$a=array(
    "Bill"=>10,
    "joe"=>20,
    "petel"=>30
);
$newArray=array_flip($a);  /* isse bill ki jagh 10 ayega */
$newArray=array_change_key_case($a, CASE_UPPER); /* pehele jesa hea bese ho jayega or (case upper se pura word capital ho jayega)*/
echo "<pre>";
print_r($newArray);
echo "</pre>";




?>