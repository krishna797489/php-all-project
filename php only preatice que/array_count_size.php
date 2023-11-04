<?php

  $food=array('orange','orange','orange','orange','banana','apple');

/*echo count($food); */



/* 2nd example */
/* $food=array(
    'fruits'=> array('orange','apple','banana'),
  'veggie'=>array('carrot','collard','pea') 
); */
   /* echo count($food); /* ye key count krega  */

    /*echo count($food['fruits'],1);  /* ye fruits ke andr kitni item uske liye */



    /* for loop ke throw */

     $len=count($food);
    for($i=0;$i<$len;$i++)
    {
        echo $food[$i]. "<br>";
    } 
     

     /* count size of array */
    /* echo "<pre>";
    print_r(array_count_values($food));
    echo "</pre>"; */
?>