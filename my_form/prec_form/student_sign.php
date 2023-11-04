<?php
include "database.php";
if(empty($_POST['student_name'])){
  echo '<div class="alert alert-danger">Fill Student Name.</div>';
}
else
if(empty($_POST['class'])){
  echo '<div class="alert alert-danger">Fill class.</div>';
}
else
if(empty($_POST['roll'])){
  echo '<div class="alert alert-danger">Fill Roll No.</div>';
}
else
if((isset($_POST['submit']))){
    $student_name=$_POST['student_name'];
    $class=$_POST['class'];
    $roll=$_POST['roll'];
    $Password=md5($_POST['Password']);
    $sql="SELECT roll from my_work where roll='{$roll}'"; 
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
         echo '<div class="alert alert-danger">Roll No and Password is same.</div>';
    }
    else
{ 
    $sql1="INSERT INTO my_work (`student_name`, `class`, `roll`, `password`) VALUES 
    ('$student_name', '$class', '$roll', '$Password')";
    $result1=mysqli_query($conn,$sql1);
    if($result){
        header("location:log_in.php");
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
   
    <title>Document</title>
</head>
<body style="background-color:darkmagenta">
    <div class="container">
    <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Student Form</h3>
            <form action="#" method="post" >

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" name="student_name" placeholder="student Name" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">student Name</label>
                  </div>
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  <select  name="class" class="select form-control-lg">
                    <option  disabled>Choose option</option>
                    <option value="0">8th</option>
                    <option value="1">9th</option>
                    <option value="2">10th</option>
                    <option value="3">11th</option>
                    <option value="4">12th</option>
                  </select>
                  <label class="form-label select-label">Choose your Class</label>
                </div>
              </div><br>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" placeholder="Roll" name="roll"  class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Roll No</label>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                  <div class="form-outline">
                    <input type="password"  placeholder="Password" name="Password" class="form-control form-control-lg" />
                    <label class="form-label" for="emailAddress">Password</label>
                  </div>
                </div>
            
              <div class="mt-0 pt-1">
                <input class="btn btn-outline-primary btn-lg" name="submit" type="submit" value="Submit">
                <a class="btn btn-outline-primary btn-lg" href="log_in.php">Log in</a>
                <p class="h6">Already Sign in plaese Log in</p>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    </div>
</body>
</html>