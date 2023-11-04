<!-- 
What is constructor?
->if you create a __construct() function in php will automatically call 
this function when you create an object from a class.
Notice you create object from a class.
You can say that the constructor are the blueprints for object creation.
jab bi class ko bnate hea to constructor automatic call ho jata

Example:
-->

<?php
class Channel{  /* ye class bnayi */
    public $name; /* ye variable */
    function __construct(){ /* ye constructor */
        echo "hello ";
    }
   function get_name($name){ /* ye function create kiya */
    return $name;
   }
}
$channel=new Channel();  /* ye object create kiya */
echo $channel->get_name("krishna")  /* ye object call kiya */







?>