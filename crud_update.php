<?php
include 'crud_connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    
    $sql=" update `cruds` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        echo "updated succesfully";
        /* header('location:crud_form.php'); */
    }
    else
    {
        die(mysqli_error($conn));
    }
}


?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"
    placeholder="Enter your name" name="name"  autocomplete="off" >
  </div>
 
  <div class="form-group">
    <label >Email</label>
    <input type="Email" class="form-control"
    placeholder="Enter your email" name="email" autocomplete="off">
  </div>
 
  <div class="form-group">
    <label >Mobile</label>
    <input type="text" class="form-control"
    placeholder="Enter your Mobile No" name="mobile" autocomplete="off">
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="text" class="form-control"
    placeholder="Enter your Password" name="password" autocomplete="off">
  </div>
 
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

  
  </body>
</html>