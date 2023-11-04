<?php
include "connection.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $sql="INSERT INTO `student`(name,email,mobile)values ('$name','$email','$mobile')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:display.php");
    }
   
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>data insert</title>
</head>
<body>
    <div class="container my-5">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputname" aria-describedby="nameHelp">
  </div>
<div>
    <label for="exampleInputemail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputemail" aria-describedby="eamilHelp">
  </div>
  <div>
    <label for="exampleInputmobile" class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" id="exampleInputmobile" aria-describedby="mobileHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    
    </div>
    
</body>
</html>