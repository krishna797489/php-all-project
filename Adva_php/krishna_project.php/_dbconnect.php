<?php
$conn=new mysqli('localhost','root','','users');
if($conn)
{
     echo "connection is success";
}
else
{
    die(mysqli_error($conn));
}






?>