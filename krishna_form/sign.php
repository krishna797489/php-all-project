<?php
include "conection.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT username from persona where username='{$username}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_fetch_assoc($result)){
        echo "<p>username is arleady used..</p>";
    }
    else
    {
        $sql1="INSERT INTO `persona` (`name`, `username`, `password`) VALUES ('$name', '$username', '$password')";
        $result1=mysqli_query($conn,$sql1);
        if($result1){
            header("location:display.php");
        }
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>sign</title>
</head>
<body>
    
    <div class="container">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" placeholder="Enter your name" id="exampleInputname" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputusername" class="form-label">Username</label>
    <input type="name" class="form-control" name="username" placeholder="Create in username" id="exampleInputusername" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputpassword" class="form-label">password</label>
    <input type="password" class="form-control" name="password" placeholder="Create in password" id="exampleInputpassword" aria-describedby="passwordHelp">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="login.php" class="btn btn-primary">Log in</a>
</form>
    </div>
</body>
</html>