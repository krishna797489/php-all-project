<?php
     echo "while loop <br>";
    $i=0;
    $x=9;
    while($i<5000 && $x<60)
    {
         echo "The value of i is ";
        echo $i+1;
        echo "<br>";
        $i+=3;
        $x+=4;
    }

?>