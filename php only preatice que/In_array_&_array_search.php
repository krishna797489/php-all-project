<?php


/* in_array search */
/*$food=array('orange','55','5.5','grapes');*/
/* echo in_array('apple',$food);  */ /* output 1=>true(avialable) or 0=>false(not available) */


/* ye hi if else ke throw */
/* if(in_array('oranghe',$food))
{
    echo "Find success";
}
else
{
    echo "Can't Find";
} */

/* array_search */ /* creat in accociation array */
$food=array('a'=>'orange', 'b'=>'banana', 'c'=>'apple', 'd'=>'grapes');
echo array_search('apple',$food);




?>