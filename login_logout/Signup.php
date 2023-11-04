<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Signup page</title>
</head>
<body>
  <?php
include "connection.php";
if(isset($_POST['submit'])){
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,md5($_POST['password']));

  $sql="SELECT username from form where username='{$username}'"; 

  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    echo '<div class="alert alert-danger">Username and Email is same.</div>';
  }
  else
  {
     $sql1="INSERT INTO form (name,email,username,password) values ('$name','$email','$username','$password')";
  if(mysqli_query($conn,$sql1)){
    header("location:show.php");
  }
  }
}
?>

    <div class="container my-3">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Enter your Name</label>
    <input type="name" class="form-control" name="name" id="exampleInputname" placeholder="Enter your Name" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputemail" class="form-label">Enter your Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputemail" placeholder="Enter your Email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputusername" class="form-label">Username</label>
    <input type="name" class="form-control" name="username" id="exampleInputname" placeholder="Enter your Username" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputname" placeholder="Enter your Name" aria-describedby="nameHelp">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    
</body>
</html>