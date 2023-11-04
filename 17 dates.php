<?php
    echo "welcome to the dates <br>";
    $d=date("dS F Y");    /* d(me zero ayega) j(me zero nhi ayega)*/
    $d=date("ds F Y,g:i A");
    echo "Today date is $d <br>";
    
    //prints something like: Monday 8th of August 2005 03:12:46 PM
    echo date('l js \of F y h:i:s A');
     
    $Year=date("y ");
    echo "<br>";
    echo " Copyright $Year | All rights reserved <br>"


?>