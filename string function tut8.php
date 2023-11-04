<?php
    $name ="krishna";
    echo $name;
    echo "<br>";

    echo "The Length of my string is=" . strlen($name); /*(.ikso lgake string ko join ko join kr skte hea)kisi ki  length nikalne ke liye */
    echo "<br>";

    echo strrev($name);  /* reverse ke liye  */
    echo "<br>";    /* br tag next line ke liye */

    echo strpos($name,"h");   /* koi word ko kitne no pr hea pta krna  */
    echo "<br>";

    echo str_repeat($name,45);  /* repeate krne ke liye */
    echo "<br>";
    
        echo "<pre>";  /* (pre)jesa print krayege besa hi print hoga */
    echo rtrim("     thise is a good boy      "); /*rtrim(right se space hat jayega)*/ 
    echo "<br>";
    echo ltrim("     thise is a good boy      "); /* ltrim(left se space hat jayega) */
    echo "<pre>";

?>