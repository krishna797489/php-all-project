<?php
$conn=new mysqli('localhost','root','','news-site');
if($conn){
    echo "*";
}
else
{
    die(mysqli_errno($conn));
}










?>