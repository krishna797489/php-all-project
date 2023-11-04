<?php
include "connection.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="delete from `student` where `id`='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:show.php") ;
    }
}





?>