
<?php

if($_SESSION["user_role"]=='0'){
    header("location: post.php");
}
include "config.php";
$userid=$_GET['id'];
$sql="DELETE FROM user where user_id={$userid}";
if(mysqli_query($conn,$sql)){
    header("location:users.php");
}
else
{
    die(mysqli_errno($conn));
}

mysqli_close($conn);


?>