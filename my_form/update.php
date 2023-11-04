<?php
include "connection.php";
$id=$_GET["id"];
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $class=$_POST['class'];
    $subject=$_POST['subject'];
     $sql="UPDATE `student` SET `name` = '$name', `age` = '$age', `gender` = '$gender', `city` = '$city', `class` = '$class', `subject` = '$subject' where `id`='$id' ";

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
    <title>Display</title>
</head>
<body>
<div class="container my-5">
<?php
$id=$_GET["id"];
$sql1="SELECT * FROM `student` WHERE `id`='$id' ";
$result1=mysqli_query($conn,$sql1);
if($row=mysqli_fetch_assoc($result1)){
?>
    <form action="#" method="post">
        <input type="hidden" name="id"  class="form-control" value="<?php echo $row["id"]; ?>">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="name" value="<?php echo $row['name']; ?>" class="form-control" name="name" placeholder="Enter your name" id="exampleInputname" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputage" class="form-label">Age</label>
    <input type="date" value="<?php echo $row['age']; ?>" class="form-control" name="age" placeholder="Enter your DOB" id="exampleInputage" aria-describedby="ageHelp">
  </div>
  
  <fieldset data-role="controlgroup">
      <label>Gender:</label>
        <label for="male">Male</label>
        <input type="radio" name="gender" value="<?php echo $row['gender']; ?>" id="male" value="male" checked>
        <label for="female">Female</label>
        <input type="radio" name="gender" value="<?php echo $row['gender']; ?>" id="female" value="female">
      </fieldset>
  <div class="mb-3">
    <label for="exampleInputcity" class="form-label">City</label>
    <input type="name" value="<?php echo $row['city']; ?>" class="form-control" name="city" placeholder="Enter your city" id="exampleInputcity" aria-describedby="cityHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputclass" class="form-label">class</label>
    <input type="text" value="<?php echo $row['class']; ?>" class="form-control" name="class" placeholder="Enter your class" id="exampleInputclass" aria-describedby="classHelp">
</div>
<div class="form-group">
                          <label>Subject</label>
                          <select class="form-control" value="<?php echo $row['subject']; ?>" name="subject" >
                              <option value="0">English</option>
                              <option value="1">Hindi</option>
                              <option value="2">Maths</option>
                              <option value="3">science</option>
                          </select>
                      </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<?php
}
?>
    </div>
</body>
</html>