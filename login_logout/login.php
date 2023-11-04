<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
<?php
include "connection.php";
if(isset($_POST['submit'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $password=md5($_POST['password']);
    $sql="SELECT id,username from form where username='{$username}' and password='{$password}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION["username"]=$row['username'];
            $_SESSION['id']=$row['id'];
            header("location:show.php");
        }

    }
    else
    {
        echo '<div class="alert alert-danger">Username and password are not matched.</div>';
    }
}
?>
    <div class="container my-5">
    <h2>Login system</h2>
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputusername" class="form-label">Username</label>
    <input type="name" class="form-control" name="username" id="exampleInputusername" placeholder="Enter your Username" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputpassword" placeholder="Enter your password" aria-describedby="passwordHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Login</button>
  <button type="submit" class="btn btn-primary"><a href="Signup.php" class="text-light">Signup</a></button>
</form>
    </div>
</body>
</html>