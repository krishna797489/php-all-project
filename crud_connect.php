<?php

$conn=new mysqli('localhost','root','','login_ragister');
if($conn)
{
    echo "connection is successfull";
}
else
{
    die(mysqli_error($conn));
}


?>