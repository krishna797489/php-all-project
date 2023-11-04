<?php
include "conection.php";
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT id,username from persona where username='{$username}' and password='{$password}'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION["username"]=$row['username'];
            $_SESSION["id"]=$row['id'];
            header("location:display.php");
        }
    } 
    else
    {
        echo "username and password is wrong.";
    } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>login</title>
</head>
<body>
    <div class="container my-5">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputusername" class="form-label">Username</label>
    <input type="name" class="form-control" name="username" placeholder="Create in username" id="exampleInputusername" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputpassword" class="form-label">password</label>
    <input type="password" class="form-control" name="password" placeholder="Create in password" id="exampleInputpassword" aria-describedby="passwordHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="sign.php" class="btn btn-primary">Sign in</a>
</form>
    </div>
</body>
</html>