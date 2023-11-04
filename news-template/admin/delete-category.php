<?php
include "config.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="DELETE from category where `category_id`=$id ";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:category.php');
    }

}







?>