<?php
include "connection.php";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $class=$_POST['class'];
   
     $sql="INSERT INTO `student` (`name`, `age`, `gender`, `city`, `class`, `subject`) VALUES ('$name ', '$age', '$gender', '$city', '$class', '$subject')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        header("location:show.php");
    }
    else
    die(mysqli_error($conn)); 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>form</title>
</head>
<body>
    <div class="container my-5">
    <form action="#" method="post">
  <div class="mb-3">
    <label for="exampleInputname" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" placeholder="Enter your name" id="exampleInputname" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputage" class="form-label">Age</label>
    <input type="date" class="form-control" name="age" placeholder="Enter your DOB" id="exampleInputage" aria-describedby="ageHelp">
  </div>
  
  <fieldset data-role="controlgroup">
      <label>Gender:</label>
        <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male" checked>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female">
      </fieldset>
  <div class="mb-3">
    <label for="exampleInputcity" class="form-label">City</label>
    <input type="name" class="form-control" name="city" placeholder="Enter your city" id="exampleInputcity" aria-describedby="cityHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputclass" class="form-label">class</label>
    <input type="text" class="form-control" name="class" placeholder="Enter your class" id="exampleInputclass" aria-describedby="classHelp">
</div>
<div class="form-group">
                          <label>Subject</label>
                          
                          <select multiple class="chosen-select form-control" name="subject">
    <option value="english">English</option>
    <option value="hindi">Hindi</option>
    <option value="maths">Maths</option>
    <option value="science">science</option>
  </select>
         </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

    </div>
</body>
</html>
<script>
$(".chosen-select").chosen({
  no_results_text: "Oops, nothing found!"
})
</script>