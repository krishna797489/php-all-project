<?php
$conn=new mysqli('localhost','root','','login_ragister');
if($conn)
{
    echo "*";
}
else
{
    die(mysqli_error($conn));
}
?>