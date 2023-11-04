<?php
    echo "welcome to php tutorial on function <br>";
    function processMarks($marksArr)  /* create in function(processMarks) */
    {
        $sum=0;
        foreach($marksArr as $value)
        {
            $sum+=$value;

        }
        return $sum;
    }

    function avgMarks($marksArr)  /* create in function avgmarks */
    {
        $sum=0;
        $i=1;
        foreach($marksArr as $value)
        {
            $sum+=$value;
            $i++;
        }
        return $sum/$i;
    }
    $rohanDas=[34,98,45,12,98,93];
   /*  $sumMarks=processMarks($rohanDas); */  /* idhar call krdiya function ko */
     $sumMarks=avgMarks($rohanDas);
 
    $krishna=[99,78,58,45,78,25];
    /* $sumMarkskrishna=processMarks($krishna); */ /* idhar call krdiya function ko */
    $sumMarkskrishna=avgMarks($krishna); 

    echo "Total marks scored by rohan out of 600 is $sumMarks <br>";
    echo "Total marks scored by krishna out of 600 is $sumMarkskrishna";

?>