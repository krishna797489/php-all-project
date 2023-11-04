<?php
include "connect.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE from work where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo " deleted.";
    }
    else
    {
        die(mysqli_errno($conn));
    }
}





?>