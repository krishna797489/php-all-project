<?php
include "database.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE from `my_work` where id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:show.php');
    }
    }






?>