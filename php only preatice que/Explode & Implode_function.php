<?php

/* explode function */
/* string ko array me convert krna */
$str= "Hello world. It's a beautiful day.";
$array =explode(" ", $str ,3);  /* upar variable ka data hea usko array me convert krdega */
                                /* 3 array show krega */
echo "<pre>";
print_r($array);
echo "</pre>";

/* implode function */ 
/* array ko string me convert krna  */
$array =array('Hello','World','krishna','what');
$str =implode(" ",$array);

echo $str;



?>