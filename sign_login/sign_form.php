<?php
include "connection.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql="SELECT username from student";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        echo "username arleady exist";
    }
    else
    {
        $sql1="INSERT into student (name,age,username,password) VALUES('$name','$age','$username','$password')";
        $result1=mysqli_query($conn,$sql1);
        if($result){
            echo "succces";
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
    <title>sign form</title>
</head>
<body>
    <div class="container my-5">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">name</label>
    <input type="name" class="form-control" name="name" id="exampleInputname" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputage" class="form-label">age</label>
    <input type="age" class="form-control" name="age" id="exampleInputage" aria-describedby="ageHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputusername" class="form-label">username</label>
    <input type="name" class="form-control" name="username" id="exampleInputusername" aria-describedby="usernameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputpassword" class="form-label">password</label>
    <input type="password" class="form-control" name="password" id="exampleInputpassword" aria-describedby="passwordHelp">
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  <div class="form-text">Already Sign in please log in</div>
  
</form>
    </div>
</body>
</html>