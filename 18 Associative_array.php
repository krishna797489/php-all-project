<?php
echo "welcime to associative arrays in php<br>";

/* $arr=array('thise','that','what');
echo $arr[0];
echo $arr[1];
echo $arr[2];
 */

 /* Associative Arrays */
  $favCol=array('krishna'=>'black',   
                'nancy'=>'blue',
                'raman'=>'red',
                '8'=>'green'
);
/*echo $favCol['8']/* ek ek krke bi puch skte hea */
  
/* foreach ke throw puchna */
    foreach($favCol as $key => $value)
    {
        echo "<br>Favorite color of $key is $value";
    }

?>