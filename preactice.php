<?php

$itemCountArray=[1,1,2,3,3,1,2,4,5,4,5,7,7];
foreach($itemCountArray as $value){
   if($itemCountArray[$value]){ 
        $itemCountArray[$value]++;
    }
        else
        {
            $itemCountArray[$value]=1;
        }
    }
    print_r($itemCountArray);
    asort($itemCountArray);
    print_r($itemCountArray);


?>