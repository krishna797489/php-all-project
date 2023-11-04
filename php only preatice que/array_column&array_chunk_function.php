<?php
/* array_column */
/* $array=array(
    array(
    'id'=> 2201,
    'first_name'=>'Anil',
    'last_name'=>'kapoor',
    ),
    array(
        'id'=> 2202,
        'first_name'=>'salman',
        'last_name'=> 'khan',
    ),
    array(
        'id'=>2203,
    'first_name'=>'krishna',
    'last_name'=>'kushwah',
    )
    );

  $newArray=array_column($array,'first_name'); /*first name ka data show krega  */
    
   /* echo "<pre>";
    print_r($newArray);
    echo "</pre>"; */


    /* Array_chunk_function */
    $cars=["Volvo","BMW","Toyota","Honda","Mercedes","Opel"];
    $newArray=array_chunk($cars,3);
    echo "<pre>";
    print_r($newArray);
    echo "</pre>";
?>