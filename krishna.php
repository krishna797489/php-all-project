<?php
echo "Welcome to an function <br>";
function processmarks ($marks_arr)
{
    $sum=0;
    foreach ($marks_arr as $value)
    {
      $sum+=$value;
    }
    return $sum;
}
function avgmarks($marks_arr)
{
    $sum=0;
    $i=1;
    foreach ($marks_arr as $value) 
    {
       $sum+=$value;
       $i++;
    }
}
$rohanDas=[34,45,12,98,93];
$sumMarks=processmarks($rohanDas);
$sumMarks=AvgMarks($rohanDas);
$sumMarks=[99,78,58,45,78,25];
$sumMarkskrishna=ProcessMarks($krishna);
$sumMarkskrishna=AvgMarks($krishna);
echo "Total marks scored by Rohan out of 600 is $sumMarks<br>";
echo "Total marks scored by krishna out of 600 is $sumMarkskrishna";






?>