<?php
echo "welcome to multi dimensional array in php<br>";


/* creating 2dimensional array */
$multiDim=array(
                array(2,5,7,8),
                array(1,2,3,1),
                array(4,5,0,1));
        
        /* echo var_dump($multiDim); */
     /*   echo $multiDim */

     /* print multidimension array  */
       /* for ($i=0; $i < count($multiDim) ; $i++) { 
            echo var_dump($multiDim[$i]); /* isse pura arry show hoga */
       /*     echo "<br>";  
       }   */

       /* for array print krna  */
       for ($i=0; $i < count($multiDim) ; $i++)
        { 
            for ($j=0; $j < count($multiDim[$i]); $j++) 
            { 
                echo $multiDim[$i][$j];
                echo " ";
            }
            echo "<br>";
       }

?>