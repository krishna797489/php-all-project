<?php
$conn=new mysqli("localhost","root","","form");
if($conn)
{
    echo "connection is success";
}
else
{
    die(mysqli_debug($conn));
}
?>