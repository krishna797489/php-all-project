<?php
include 'crud_connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from `cruds` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
       /*  echo "Delete is Successfully"; */
        header('location:crud_display.php');
    }
    else
    {
        die(mysqli_error($conn));
    }
}




?>