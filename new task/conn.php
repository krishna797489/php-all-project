<?php 
$conn= new mysqli("localhost","root","","my_task");
if($conn){
    echo "connection is success";
}
else
{
    die(mysqli_debug($conn));
}



?>