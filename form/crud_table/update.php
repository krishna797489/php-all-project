<?php
include "connection.php";
if(isset($_POST['edit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $sql="UPDATE `student` set `name`='$name',`email`='$email',`mobile`='$mobile' where `id`='$id'";
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
    <title>update data</title>
</head>
<body>
  <?php
$id=$_GET["id"];
$sql1="SELECT*FROM student where id=$id";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1)>0){
  while($row=mysqli_fetch_assoc($result1)){
  
?>
<div class="container my-5">
    <form action="#" method="post">
    <input type="hidden" name="id"  class="form-control" value="<?php echo $row['id']; ?>">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" value="<?php echo $row['name'] ?>" id="exampleInputname" aria-describedby="nameHelp">
  </div>
<div>
    <label for="exampleInputemail" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="<?php echo $row['email'] ?>" id="exampleInputemail" aria-describedby="eamilHelp">
  </div>
  <div>
    <label for="exampleInputmobile" class="form-label">Mobile</label>
    <input type="text" name="mobile" class="form-control" value="<?php echo $row['mobile'] ?>" id="exampleInputmobile" aria-describedby="mobileHelp">
  </div>
  <button type="submit" name="edit" class="btn btn-primary">Submit</button>
</form>
    <?php
  }
}
    ?>
    </div>
    
    
</body>
</html>