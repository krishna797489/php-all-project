<?php
include "connect.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $mobile=$_POST['mobile'];
    $sql="INSERT INTO work (name,age,mobile)values('$name','$age','$mobile')";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:show.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data insert</title>
</head>
<body>
    <div class="container my-5">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">name</label>
    <input type="name" class="form-control" name="name" placeholder="Enter your name" id="exampleInputname" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputage" class="form-label">Age</label>
    <input type="date" class="form-control" name="age" placeholder="Enter your age" id="exampleInputage" aria-describedby="ageHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputmobile" class="form-label">Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Enter Your mobile no" id="exampleInputmobile" aria-describedby="mobileHelp">
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</body>
</html>