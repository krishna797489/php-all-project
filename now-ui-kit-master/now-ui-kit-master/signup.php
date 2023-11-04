
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
    <title>signup page</title>
</head>
<body>
    
<div class="section section-signup" style="background-image: url('assets/img/bg11.jpg'); background-size: cover; background-position: top center; min-height: 700px;">
    <div class="container">
      <div class="row">
        <div class="card card-signup" data-background-color="orange">
          <form class="form" method="post" action="#">
            <div class="card-header text-center">
            <?php
include "connection.php";
if(empty($_POST['name'])){
  echo '<div class="alert alert-danger">pleas fill name..</div>';
}
else
if(empty($_POST['username'])){
  echo '<div class="alert alert-danger">pleas fill username..</div>';
}
else
if(empty($_POST['email'])){
  echo '<div class="alert alert-danger">pleas fill email..</div>';
}
else
if(empty($_POST['password'])){
  echo '<div class="alert alert-danger">pleas fill password..</div>';
}

else
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=md5($_POST['password']);
  $sql="INSERT INTO signup_process (name,username,email,password) values('$name','$username','$email','$password')";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "sucess";
  }
      
  
}




?>
              <h3 class="card-title title-up">Sign Up</h3>
              <div class="social-line">
                <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-round">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a href="#pablo" class="btn btn-neutral btn-twitter btn-icon btn-lg btn-round">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#pablo" class="btn btn-neutral btn-google btn-icon btn-round">
                  <i class="fab fa-google-plus"></i>
                </a>
              </div>
            </div> 
            <div class="card-body">
              <div class="input-group no-border">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons users_circle-08"></i>
                  </span>
                </div>
                <input type="text" class="form-control" name="name" placeholder="Enter your full name">
              </div>
              <div class="input-group no-border">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons text_caps-small"></i>
                  </span>
                </div>
                <input type="text" placeholder="username" name="username" class="form-control" />
              </div>
              <div class="input-group no-border">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="now-ui-icons ui-1_email-85"></i>
                  </span>
                </div>
                <input type="email" class="form-control" name="email" placeholder="Email...">
              </div>
              <div class="input-group no-border">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-lock form-icon"></i>
                  </span>
                </div>
                <input type="password" placeholder="Create password" name="password" class="form-control" />
              </div>
            </div> 
            <div class="card-footer text-center">
              <button type="submit" class="btn btn-neutral btn-round btn-lg" name="submit">Get stated</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col text-center">
        <a href="examples/login-page.php" class="btn btn-outline-default btn-round btn-white btn-lg" target="_blank">View Login Page</a>
      </div>
    </div>
  </div>
</body>
</html>